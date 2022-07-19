<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\FormsModel;
class Forms extends Controller
{
/*public function forms()
{
if (! $this->validate([
    'name' => 'required',
    'email' => 'required|valid_email',
    'posttitle'=>'required',
    'file' => 'required',
    'city' => 'required',
    'Textarea' => 'required',
])) {
        return view('admin/pages/forms',[ 'validation' => $this->validator,]);
    }   
    else 
    {
        $forms=new FormsModel();
        $file=$this->request->getFile('img');
            if ($file->isValid()&&!$file->hasMoved()) {
            $imageName = $file->getName();
            $file->move('public/uploads',$imgName);
        }
        $file=$this->request->getFile('img');  
        $data = [ 'name'=> $this->request->getpost('name'),
        'email'=> $this->request->getpost('email'),
        'posttitle'=> $this->request->getpost('posttitle'),
        'city'=> $this->request->getpost('city'),
        'Textarea'=> $this->request->getpost('Textarea'),
               //'file'=> $this->request->getVar('file'),
       'image' => $imgName,];
        $model = new FormsModel();
        $model->insert($data);
        //var_dump($data);
   }
    //$file->save($data);
     //return redirect()->to('forms')->withInput("done");
   // return view('admin/pages/login');


}*/
public function forms()
    {
        $product = new FormsModel();
        $file = $this->request->getFile('file');

        if ($file->isValid() && ! $file->hasMoved()) {
            $imageName = $file->getName();
            $file->move('public/uploads/', $imageName);
        }
        $data =[
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'posttitle' => $this->request->getPost('posttitle'),
            'city' => $this->request->getPost('city'),
            'Textarea' => $this->request->getPost('Textarea'),
            'file' => $imageName,
        ];
        $product->save($data);
        return redirect()->to('forms')->with('status','Product and Image Saved');
    }


}


