<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this
            ->load
            ->helper('url');
    }

    public function index()
    {
        $this
            ->load
            ->view('index');
    }
	 public function FindTheString()
    {
        $s1 = $this
            ->input
            ->post('str1');
        $s2 = $this
            ->input
            ->post('str2');
        $st1 = strtoupper($s1);
        $st2 = strtoupper($s2);
        $str1 = count_chars($st1, 3);
        $str2 = count_chars($st2, 3);
        $data['string1'] = $st1;
        $data['string2'] = $st2;
        $data['opt1'] = $this->CompareString($str1, $str2);
        $data['opt2'] = $this->CompareString($str2, $str1);
        $this
            ->load
            ->view('Result', $data);
    }

    public function CompareString($str1 = '', $str2 = '')
    {
        $op1containchar = '';
        for ($i = 0;$i < strlen($str1);$i++)
        {
            $stringincluded = false;
            for ($j = 0;$j < strlen($str2);$j++)
            {

                if ($str1[$i] == $str2[$j])
                {
                    $stringincluded = true;

                }
			}

            if ($stringincluded == false)
            {
                $op1containchar .= $str1[$i];
            }

        }

        return $op1containchar;
	 }

}

