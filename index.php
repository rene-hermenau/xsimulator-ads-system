<?php

#namespace XSIM;

class Xsim_index {

    public static function getHtml() {
        $output = 'Hello World';
        return $output;
    }

    public static function getTextAd() {
        $ads = array();

        $ads[] = 'DOF Reality: Affordable Plug & Play Motion Simulators from $749<br>
<a href="https://dofreality.com/?utm_campaign=txt1&utm_source=xsim">https://dofreality.com/?utm_campaign=txt1&utm_source=xsim</a>';

        $ads[] = 'DOF Reality:  Ready to Play 2-6 DOF Full Motion Simulators from $749<br>
<a href="https://dofreality.com/?utm_campaign=txt1&utm_source=xsim">https://dofreality.com/?utm_campaign=txt2&utm_source=xsim</a>';
        
        shuffle($ads);
        
        $header = '<p style="font-size: 13px; color: #000000">';
        $footer = '</p>';
        echo $header;
        echo $ads[0];
        echo $footer;
    }

}
