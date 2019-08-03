<?php
namespace App\Helper;

use App\Contracts\GenerateInterface;

class GenerateDataTypes implements GenerateInterface
{
    private $min;
    private $max;
    private $total;

    /**
     * generates random data types.
     *
     * @param string $type  allowed typed `int` or `string` or `mix`
     * @param integer $total results number
     * @return array of results
     */
    public function config($type = 'int', $total = 3, $min = 1, $max = 10)
    {
        // assign min, max and total number of results as values to be used by other claasses
        $this->min = $min;
        $this->max = $max;
        $this->total = $total;

        // check data type
        switch ($type) {
            case 'int':
                $results = $this->generate_integers();
                break;

            case 'string':
                $results = $this->generate_strings();
                break;

            case 'mix':
                $results = $this->generate_mix();
                break;

            default:
                return abort('using undefined data type!');
                break;
        }

        return $results;
    }

    /**
     * generates integer numbers only
     *
     * @return array of integers
     */
    public function generate_integers() {
        $int_arr = [];

        for ( $i=1; $i <= $this->total; $i++ ) {
            $int_arr[] = rand($this->min, $this->max);
        }

        return $int_arr;
    }

    public function generate_strings() {
        $strings_arr = [];

        for ( $i=1; $i <= $this->total; $i++ ) {
            $strings_arr[] = str_random($this->max);
        }

        return $strings_arr;
    }

    public function generate_mix() {
        $mix_arr = [];

        for ( $i=1; $i <= $this->total; $i++ ) {
            $mix_arr[] = ($i % 2) ? str_random($this->max) : rand($this->min, $this->max);
        }

        return $mix_arr;
    }
}
