<?php
namespace App\Helper;

class CheckResult
{
    private $rules;

    public function config($rules = [])
    {
        $this->rules = $rules;
    }

    public function get($results = [])
    {
        $count_values = [];

        if ( count($results) < 1 ) {
            abort('Results array is empty');
        }

        foreach ($results as $result) {
            @$count_values[$result]++;
        }

        return $this->check_results($count_values);
    }

    private function check_results($values)
    {
        $max_value = max($values);

        return @$this->rules[$max_value];
    }
}
