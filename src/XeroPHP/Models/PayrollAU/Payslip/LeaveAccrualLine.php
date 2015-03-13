<?php

namespace XeroPHP\Models\PayrollAU\Payslip;

use XeroPHP\Remote;


class LeaveAccrualLine extends Remote\Object {

    /**
     * Xero identifier for the Leave type.
     *
     * @property string LeaveTypeID
     */

    /**
     * Number of units for the Leave line.
     *
     * @property string[] NumberOfUnits
     */

    /**
     * If you want to auto calculate leave.
     *
     * @property string AutoCalculate
     */



    /*
    * Get the resource uri of the class (Contacts) etc
    *
    * @return string
    */
    public static function getResourceURI(){
        return null;
    }


    /*
    * Get the root node name.  Just the unqualified classname
    *
    * @return string
    */
    public static function getRootNodeName(){
        return 'LeaveAccrualLine';
    }


    /*
    * Get the guid property
    *
    * @return string
    */
    public static function getGUIDProperty(){
        return '';
    }


    /**
    * Get the stem of the API (core.xro) etc
    *
    * @return string|null
    */
    public static function getAPIStem(){
        return Remote\URL::API_PAYROLL;
    }


    /*
    * Get the supported methods
    */
    public static function getSupportedMethods(){
        return array(
        );
    }

    /**
     *
     * Get the properties of the object.  Indexed by constants
     *  [0] - Mandatory
     *  [1] - Type
     *  [2] - PHP type
     *  [3] - Is an Array
     *
     * @return array
     */
    public static function getProperties(){
        return array(
            'LeaveTypeID' => array (false, self::PROPERTY_TYPE_STRING, null, false),
            'NumberOfUnits' => array (false, self::PROPERTY_TYPE_STRING, null, true),
            'AutoCalculate' => array (false, self::PROPERTY_TYPE_STRING, null, false)
        );
    }


    /**
     * @return string
     */
    public function getLeaveTypeID(){
        return $this->_data['LeaveTypeID'];
    }

    /**
     * @param string $value
     * @return LeaveAccrualLine
     */
    public function setLeaveTypeID($value){
        $this->propertyUpdated('LeaveTypeID', $value);
        $this->_data['LeaveTypeID'] = $value;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getNumberOfUnits(){
        return $this->_data['NumberOfUnits'];
    }

    /**
     * @param string $value
     * @return LeaveAccrualLine
     */
    public function addNumberOfUnit($value){
        $this->propertyUpdated('NumberOfUnits', $value);
        $this->_data['NumberOfUnits'][] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getAutoCalculate(){
        return $this->_data['AutoCalculate'];
    }

    /**
     * @param string $value
     * @return LeaveAccrualLine
     */
    public function setAutoCalculate($value){
        $this->propertyUpdated('AutoCalculate', $value);
        $this->_data['AutoCalculate'] = $value;
        return $this;
    }


}