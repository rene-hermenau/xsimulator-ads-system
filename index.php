<?php

#namespace XSIM;

class Xsim_index {

    /**
     * This can be called in xenforo with '<xen:callback class="Xsim_index" method="getTextAd"></xen:callback>'
     */
    public static function getTextAd() {
        $ads = array();

        $ads[] = 'Advertisment<br>DOF Reality: Affordable Plug & Play Motion Simulators from $749<br>
<a href="https://dofreality.com/?utm_campaign=txt1&utm_source=xsim">https://dofreality.com</a>';

        $ads[] = 'Advertisment<br>DOF Reality:  Ready to Play 2-6 DOF Full Motion Simulators from $749<br>
<a href="https://dofreality.com/?utm_campaign=txt1&utm_source=xsim">https://dofreality.com</a>';
        
        shuffle($ads);
        
        $header = '<p style="font-size: 13px; color: #000000">';
        $footer = '</p>';
        echo $header;
        echo $ads[0];
        echo $footer;
    }

}
