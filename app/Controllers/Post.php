<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\PostModel;
class Post extends Controller
{
    public function post()
    {
        $product = new PostModel();
        $file = $this->request->getFile('file');

        if ($file->isValid() && ! $file->hasMoved()) {
            $imageName = $file->getName();
            $file->move('public/uploads/', $imageName);
        }
        $data =[
            'date' => $this->request->getPost('date'),
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
           // 'pages' => $this->request->getPost('pages'),
            'city' => $this->request->getPost('city'),
            'time' => $this->request->getPost('time'),
            'file' => $imageName,
        ];
        $product->save($data);
        return redirect()->to('post')->with('status','Product and Image Saved');
    }


}


