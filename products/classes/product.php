<?php


class Product
{
   private $id, $description, $type, $image, $operation_img,$operation_txt, $time_m,$time_s, $video;

   public function __construct(string $id,string $description,string $type, string $image,string $operation_img,$operation_txt,string $time_m,string $time_s,string $video)
   {
     $this->id=$id;
     $this->description = $description;
     $this->type=$type;
     $this->image=$image;
     $this->operation_img=$operation_img;
     $this->operation_txt=$operation_txt;
     $this->time_m=$time_m;
     $this->time_s=$time_s;
     $this->video=$video;
   }



   /**
    * Get the value of id
    */ 
   public function getId()
   {
      return $this->id;
   }

   /**
    * Set the value of id
    *
    * @return  self
    */ 
   public function setId($id)
   {
      $this->id = $id;

      return $this;
   }

   /**
    * Get the value of description
    */ 
   public function getDescription()
   {
      return $this->description;
   }

   /**
    * Set the value of description
    *
    * @return  self
    */ 
   public function setDescription($description)
   {
      $this->description = $description;

      return $this;
   }

   /**
    * Get the value of type
    */ 
   public function getType()
   {
      return $this->type;
   }

   /**
    * Set the value of type
    *
    * @return  self
    */ 
   public function setType($type)
   {
      $this->type = $type;

      return $this;
   }

   /**
    * Get the value of image
    */ 
   public function getImage()
   {
      return $this->image;
   }

   /**
    * Set the value of image
    *
    * @return  self
    */ 
   public function setImage($image)
   {
      $this->image = $image;

      return $this;
   }

   /**
    * Get the value of operation_img
    */ 
   public function getOperation_img()
   {
      return $this->operation_img;
   }

   /**
    * Set the value of operation_img
    *
    * @return  self
    */ 
   public function setOperation_img($operation_img)
   {
      $this->operation_img = $operation_img;

      return $this;
   }

   

   /**
    * Set the value of time
    *
    * @return  self
    */ 
   public function setTime($time)
   {
      $this->time = $time;

      return $this;
   }

   /**
    * Get the value of video
    */ 
   public function getVideo()
   {
      return $this->video;
   }

   /**
    * Set the value of video
    *
    * @return  self
    */ 
   public function setVideo($video)
   {
      $this->video = $video;

      return $this;
   }

   /**
    * Get the value of time_m
    */ 
   public function getTime_m()
   {
      return $this->time_m;
   }

   /**
    * Set the value of time_m
    *
    * @return  self
    */ 
   public function setTime_m($time_m)
   {
      $this->time_m = $time_m;

      return $this;
   }

   /**
    * Get the value of time_s
    */ 
   public function getTime_s()
   {
      return $this->time_s;
   }

   /**
    * Set the value of time_s
    *
    * @return  self
    */ 
   public function setTime_s($time_s)
   {
      $this->time_s = $time_s;

      return $this;
   }

   /**
    * Get the value of operation_txt
    */ 
   public function getOperation_txt()
   {
      return $this->operation_txt;
   }

   /**
    * Set the value of operation_txt
    *
    * @return  self
    */ 
   public function setOperation_txt($operation_txt)
   {
      $this->operation_txt = $operation_txt;

      return $this;
   }
}
