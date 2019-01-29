<?php
/**
 * Created by PhpStorm.
 * User: zhangjun
 * Date: 2019/1/29
 * Time: 4:11 PM
 */
class Nav
{
    //mobile ditector
    private $_MobileDetector;
    private $_MobileDetectorSwitch = false;//if use mobile detector
    private $_MobileLayout;
    private $_PCLayout;
    private $_DefaultLayout ;

    public function __construct($layoutArray = [])
    {
        $this->_MobileDetector = new Mobile_Detect();
        if($layoutArray){
            if(array_key_exists('MobileLayout', $layoutArray))
                $this->_MobileLayout = $layoutArray['MobileLayout'];
            if(array_key_exists('PCLayout', $layoutArray))
                $this->_PCLayout = $layoutArray['PCLayout'];
            if(array_key_exists('DefaultLayout', $layoutArray))
                $this->_DefaultLayout = $layoutArray['DefaultLayout'];
        }
    }

    //get index page
    public function run(){
        //mobile on
        if($this->_MobileDetectorSwitch === true){
            //mobile on and go to mobile index page
            if($this->_MobileDetector->isMoble()){
                echo 'mobile detector on and is mobile'.'<br>';
                return $this->_MobileLayout;
            }
            //mobile on and goto pc index page
            else{
                echo 'mobile detector on and is not mobile'.'<br>';
                return $this->_PCLayout;
            }
        }
        //mobile off
        else{
            echo 'mobile detector off'.'<br>';
            return $this->_DefaultLayout;
        }
    }

    /**
     * open mobile detector
     */
    public function mobileDetectorSwitchOn()
    {
        $this->_MobileDetectorSwitch = ture;
    }

    /**
     * close mobile detector
     */
    public function mobileDetectorSwitchOff()
    {
        $this->_MobileDetectorSwitch = false;
    }

}