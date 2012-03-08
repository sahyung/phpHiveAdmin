<?php
/**
 * Autogenerated by Thrift Compiler (0.7.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 */
include_once $GLOBALS['THRIFT_ROOT'].'/Thrift.php';


class ExecuteDoneReportResult {
  static $_TSPEC;

  public $task_id = null;
  public $real_cmd = null;
  public $complete_status = null;
  public $success = null;
  public $start_datetime = null;
  public $end_datetime = null;
  public $exec_type = null;
  public $exec_return_str = null;
  public $current_redo_times = null;
  public $task_record_undo_id = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'task_id',
          'type' => TType::I64,
          ),
        2 => array(
          'var' => 'real_cmd',
          'type' => TType::STRING,
          ),
        3 => array(
          'var' => 'complete_status',
          'type' => TType::I32,
          ),
        4 => array(
          'var' => 'success',
          'type' => TType::BOOL,
          ),
        5 => array(
          'var' => 'start_datetime',
          'type' => TType::I64,
          ),
        6 => array(
          'var' => 'end_datetime',
          'type' => TType::I64,
          ),
        7 => array(
          'var' => 'exec_type',
          'type' => TType::I32,
          ),
        8 => array(
          'var' => 'exec_return_str',
          'type' => TType::STRING,
          ),
        9 => array(
          'var' => 'current_redo_times',
          'type' => TType::I32,
          ),
        10 => array(
          'var' => 'task_record_undo_id',
          'type' => TType::I64,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['task_id'])) {
        $this->task_id = $vals['task_id'];
      }
      if (isset($vals['real_cmd'])) {
        $this->real_cmd = $vals['real_cmd'];
      }
      if (isset($vals['complete_status'])) {
        $this->complete_status = $vals['complete_status'];
      }
      if (isset($vals['success'])) {
        $this->success = $vals['success'];
      }
      if (isset($vals['start_datetime'])) {
        $this->start_datetime = $vals['start_datetime'];
      }
      if (isset($vals['end_datetime'])) {
        $this->end_datetime = $vals['end_datetime'];
      }
      if (isset($vals['exec_type'])) {
        $this->exec_type = $vals['exec_type'];
      }
      if (isset($vals['exec_return_str'])) {
        $this->exec_return_str = $vals['exec_return_str'];
      }
      if (isset($vals['current_redo_times'])) {
        $this->current_redo_times = $vals['current_redo_times'];
      }
      if (isset($vals['task_record_undo_id'])) {
        $this->task_record_undo_id = $vals['task_record_undo_id'];
      }
    }
  }

  public function getName() {
    return 'ExecuteDoneReportResult';
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
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->task_id);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->real_cmd);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->complete_status);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->success);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->start_datetime);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 6:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->end_datetime);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 7:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->exec_type);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 8:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->exec_return_str);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 9:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->current_redo_times);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 10:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->task_record_undo_id);
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
    $xfer += $output->writeStructBegin('ExecuteDoneReportResult');
    if ($this->task_id !== null) {
      $xfer += $output->writeFieldBegin('task_id', TType::I64, 1);
      $xfer += $output->writeI64($this->task_id);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->real_cmd !== null) {
      $xfer += $output->writeFieldBegin('real_cmd', TType::STRING, 2);
      $xfer += $output->writeString($this->real_cmd);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->complete_status !== null) {
      $xfer += $output->writeFieldBegin('complete_status', TType::I32, 3);
      $xfer += $output->writeI32($this->complete_status);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->success !== null) {
      $xfer += $output->writeFieldBegin('success', TType::BOOL, 4);
      $xfer += $output->writeBool($this->success);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->start_datetime !== null) {
      $xfer += $output->writeFieldBegin('start_datetime', TType::I64, 5);
      $xfer += $output->writeI64($this->start_datetime);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->end_datetime !== null) {
      $xfer += $output->writeFieldBegin('end_datetime', TType::I64, 6);
      $xfer += $output->writeI64($this->end_datetime);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->exec_type !== null) {
      $xfer += $output->writeFieldBegin('exec_type', TType::I32, 7);
      $xfer += $output->writeI32($this->exec_type);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->exec_return_str !== null) {
      $xfer += $output->writeFieldBegin('exec_return_str', TType::STRING, 8);
      $xfer += $output->writeString($this->exec_return_str);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->current_redo_times !== null) {
      $xfer += $output->writeFieldBegin('current_redo_times', TType::I32, 9);
      $xfer += $output->writeI32($this->current_redo_times);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->task_record_undo_id !== null) {
      $xfer += $output->writeFieldBegin('task_record_undo_id', TType::I64, 10);
      $xfer += $output->writeI64($this->task_record_undo_id);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

?>