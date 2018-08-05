<?php

namespace App\Console\Commands;

use App\Movement;
use Fanatique\Parser\FixedLengthFileParser;
use Illuminate\Console\Command;

class KParseFile extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'kparse:file {filename}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Parse file';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        $parser = new FixedLengthFileParser();

        //Set the chopping map (aka where to extract the fields)
        $parser->setChoppingMap(array(
            array('field_name' => 'FlightID', 'start' => 1, 'length' => 10),
            array('field_name' => 'RegistrationMark', 'start' => 12, 'length' => 10),
            array('field_name' => 'AircraftType', 'start' => 23, 'length' => 7),
            array('field_name' => 'AerodromeDeparture', 'start' => 31, 'length' => 4),
            array('field_name' => 'AerodromeDestination', 'start' => 36, 'length' => 4),
        ));

        //Set the absolute path to the file
        $parser->setFilePath(__DIR__.'\..\..\..\storage\data\FL_07_25.PRINT');

//Parse the file
        try {
            $parser->parse();
        } catch (\Fanatique\Parser\ParserException $e) {
            echo 'ERROR - ' . $e->getMessage() . PHP_EOL;
            exit(1);
        }

//Get the content
        $movements = $parser->getContent();

        foreach( $movements as $m) {
            $movement = new Movement();
            $movement->FlightID = $m['FlightID'];
            $movement->RegistrationMark = $m['RegistrationMark'];
            $movement->AircraftType = $m['AircraftType'];
            $movement->AerodromeDeparture = $m['AerodromeDeparture'];
            $movement->AerodromeDestination = $m['AerodromeDestination'];
            $movement->save();

        }

        //
        echo "File processes successfully";
    }
}
