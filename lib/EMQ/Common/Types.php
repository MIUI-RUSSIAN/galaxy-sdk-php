<?php
namespace EMQ\Common;

/**
 * Autogenerated by Thrift Compiler (0.9.2)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;


/**
 * Copyright 2015, Xiaomi.
 * All rights reserved.
 * Author: shenyuannan@xiaomi.com
 */
class GalaxyEmqServiceException extends TException {
  static $_TSPEC;

  /**
   * @var int
   */
  public $errorCode = null;
  /**
   * @var string
   */
  public $errMsg = null;
  /**
   * @var string
   */
  public $details = null;
  /**
   * @var string
   */
  public $requestId = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'errorCode',
          'type' => TType::I32,
          ),
        2 => array(
          'var' => 'errMsg',
          'type' => TType::STRING,
          ),
        3 => array(
          'var' => 'details',
          'type' => TType::STRING,
          ),
        4 => array(
          'var' => 'requestId',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['errorCode'])) {
        $this->errorCode = $vals['errorCode'];
      }
      if (isset($vals['errMsg'])) {
        $this->errMsg = $vals['errMsg'];
      }
      if (isset($vals['details'])) {
        $this->details = $vals['details'];
      }
      if (isset($vals['requestId'])) {
        $this->requestId = $vals['requestId'];
      }
    }
  }

  public function getName() {
    return 'GalaxyEmqServiceException';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->errorCode);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->errMsg);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->details);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->requestId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('GalaxyEmqServiceException');
    if ($this->errorCode !== null) {
      $xfer += $output->writeFieldBegin('errorCode', TType::I32, 1);
      $xfer += $output->writeI32($this->errorCode);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->errMsg !== null) {
      $xfer += $output->writeFieldBegin('errMsg', TType::STRING, 2);
      $xfer += $output->writeString($this->errMsg);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->details !== null) {
      $xfer += $output->writeFieldBegin('details', TType::STRING, 3);
      $xfer += $output->writeString($this->details);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->requestId !== null) {
      $xfer += $output->writeFieldBegin('requestId', TType::STRING, 4);
      $xfer += $output->writeString($this->requestId);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class Version {
  static $_TSPEC;

  /**
   * The major version number;
   * 
   * 
   * @var int
   */
  public $major = 1;
  /**
   * The minor version number;
   * 
   * 
   * @var int
   */
  public $minor = 0;
  /**
   * The revision number;
   * 
   * 
   * @var int
   */
  public $revision = 0;
  /**
   * The date for release this version;
   * 
   * 
   * @var string
   */
  public $date = "19700101";
  /**
   * The version details;
   * 
   * 
   * @var string
   */
  public $details = "";

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'major',
          'type' => TType::I32,
          ),
        2 => array(
          'var' => 'minor',
          'type' => TType::I32,
          ),
        3 => array(
          'var' => 'revision',
          'type' => TType::I32,
          ),
        4 => array(
          'var' => 'date',
          'type' => TType::STRING,
          ),
        5 => array(
          'var' => 'details',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['major'])) {
        $this->major = $vals['major'];
      }
      if (isset($vals['minor'])) {
        $this->minor = $vals['minor'];
      }
      if (isset($vals['revision'])) {
        $this->revision = $vals['revision'];
      }
      if (isset($vals['date'])) {
        $this->date = $vals['date'];
      }
      if (isset($vals['details'])) {
        $this->details = $vals['details'];
      }
    }
  }

  public function getName() {
    return 'Version';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->major);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->minor);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->revision);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->date);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->details);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('Version');
    if ($this->major !== null) {
      $xfer += $output->writeFieldBegin('major', TType::I32, 1);
      $xfer += $output->writeI32($this->major);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->minor !== null) {
      $xfer += $output->writeFieldBegin('minor', TType::I32, 2);
      $xfer += $output->writeI32($this->minor);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->revision !== null) {
      $xfer += $output->writeFieldBegin('revision', TType::I32, 3);
      $xfer += $output->writeI32($this->revision);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->date !== null) {
      $xfer += $output->writeFieldBegin('date', TType::STRING, 4);
      $xfer += $output->writeString($this->date);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->details !== null) {
      $xfer += $output->writeFieldBegin('details', TType::STRING, 5);
      $xfer += $output->writeString($this->details);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}


