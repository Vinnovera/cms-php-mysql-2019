<?php

  class Task
  {
      private $title;
      private $createdAt;
      private $complete = false;

      function __construct($title, $createdAt) {
        $this->title = $title;
        $this->createdAt = $createdAt;
      }

      function showInfo() {
        $completeStatus = 'NOT completed';
        if($this->complete) {
          $completeStatus = 'completed';
        }
        return "Added $this->title at $this->createdAt and it is $completeStatus";
      }

      function completeTask() {
        $this->complete = true;
      }
  }

  class Tasks
  {
      //Array of Task
      private $tasks = array();
      
      public function addTask($newTask) {
        $task = new Task($newTask, date("Y/m/d"));
        array_push($this->tasks, $task);
        return $task;
      }

      public function listTasks() {
        foreach($this->tasks as $task) {
          echo $task->showInfo();
          echo '<br \>';
        }
      }
  }

  $todoList = new Tasks;
  $task1 = $todoList->addTask('Clean house');
  $task2 = $todoList->addTask('Cook dinner');
  $task3 = $todoList->addTask('Study PHP');
  $task2->completeTask();
  $todoList->listTasks();
?>