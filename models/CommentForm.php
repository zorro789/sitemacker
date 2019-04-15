<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;


class CommentForm extends Model
{
    public $comment;
    public $image;
    public $image1;
    public $image2;
    public $phone;
    public $radioList;
    
    public function rules()
    {
        return [
            [['comment', 'phone'], 'required'],
            [['comment'], 'string', 'length' => [3,1600]],
            [['radioList'], 'string', 'length' => [1,1]],
            [['image', 'image1', 'image2'], 'image', 'extensions' => 'jpg,png',
                'minWidth' => 50, 'maxWidth' => 3000,
                'minHeight' => 50, 'maxHeight' => 3000,
                ],

        ];
    }

    public function saveComment($article_id, $file2, $file3, $file4)
    {
        $comment = new Comment;
        $comment->text = $this->comment;
        $comment->user_id = Yii::$app->user->id;
        $comment->article_id = $article_id;
        $comment->status = 0;
        $comment->date = date('Y-m-d H:i:s');
        $comment->image = $file2;
        $comment->image1 = $file3;
        $comment->image2 = $file4;
        $comment->phone = $this->phone;
        $comment->stars = $this->radioList;
        return $comment->save();

    }
    public function uploadFile(UploadedFile $file, $currentImage)
    {
        $this->image = $file;

       if($this->validate())
       {
           $this->deleteCurrentImage($currentImage);
           return $this->saveImage();
       }

    }
    
    public function deleteCurrentImage($currentImage)
    {
        if($this->fileExists($currentImage))
        {
            unlink($this->getFolder() . $currentImage);
        }
    }
    
    public function saveImage($file) 
    {
        $this->image = $file;
        $filename = $this->generateFilename();//из тюльпана стал 78lki585sdcs3544

        $this->image->saveAs($this->getFolder() . $filename); // и сохранил в 

        return $filename;
    }
    private function getFolder()
    {
        return Yii::getAlias('@web') . 'comments/';
    }

    private function generateFilename()
    {
        return strtolower(md5(uniqid($this->image->baseName)) . '.' . $this->image->extension);
    }
}