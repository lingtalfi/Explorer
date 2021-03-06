<?php


namespace BabyYaml\Reader\MiniMl\Formatter\ParentsAwareMarkupParser;
use Ling\BabyYaml\Reader\ParentsAwareMarkupParser\ParentsAwareMarkupParser\Adaptor\ConsoleParentsAwareMarkupParserAdaptor;


/**
 * MiniMlConsoleParentsAwareMarkupParserAdaptor
 * @author Lingtalfi
 * 2015-05-21
 *
 *
 */
class MiniMlConsoleParentsAwareMarkupParserAdaptor extends ConsoleParentsAwareMarkupParserAdaptor
{


    public function __construct()
    {
        parent::__construct();

        $this->formatCodes = [
            // text effects
            'bold' => '1',
            'underline' => '4',
            // colors
            'black' => '30',
            'white' => '97',
            'red' => '31',
            'green' => '32',
            'blue' => '34',
            'orange' => '91', // same as lightRed
            'yellow' => '33',
            'purple' => '35', // same as magenta
            // background colors
            'blackBg' => '40',
            'whiteBg' => '107',
            'redBg' => '41',
            'greenBg' => '42',
            'blueBg' => '44',
            'orangeBg' => '101', // same as lightRed
            'yellowBg' => '43',
            'purpleBg' => '45', // same as magenta
            // miscellaneous
            'emergency' => '31;40', // red - blackBg
            'alert' => '33;40', // yellow - blackBg
            'critical' => '97;40', // white - blackBg
            'error' => '31',    // red
            'warning' => '91',  // orange
            'notice' => '35',   // purple   
            'info' => '34',     // blue 
            'debug' => '90;1',    // gray - bold
            'success' => '32',  // green

        ];
        $this->escapeSequence = "\033";
    }

    public function setFormatCode($identifier, $formatCode)
    {
        throw new \RuntimeException("cannot add/remove a miniMl tag");
    }

}
