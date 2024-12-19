<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\BlogModel;

class DashboardController extends Controller
{
    // Display the Dashboard
    public function index()
    {
        return view('dashboard');
    }

    // Display the Blogs Page
    public function blogs()
    {
        return view('blogs');
    }

    // Display a Single Blog Page
    public function blog($id)
    {
        return view('blog', ['id' => $id]);
    }

    // Show the Create Blog Form
    public function createBlog()
    {
        return view('create_blog');
    }

    // Create Blog 
    public function storeBlog()
    {
        // Validate the form input
        if (!$this->validate([
            'title' => 'required|min_length[3]|max_length[255]',
            'content' => 'required|min_length[10]',
        ])) {
            
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Prepare the data
        $blogModel = new BlogModel();
        $data = [
            'title'   => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
        ];

        // Save the blog data to the database and redirect
        $blogModel->save($data);
        
        session()->setFlashdata('success', 'Blog created successfully!');
        return redirect()->to('/dashboard/blogs');
    }

    //Edit blog
    public function editBlog($id)
    {
        $blogModel = new BlogModel();

        // Fetch the blog data from the database by ID
        $blog = $blogModel->find($id);

        if (!$blog) {
            //check if blog exists
            session()->setFlashdata('error', 'Blog not found!');
            return redirect()->to('/dashboard/blogs');
        }

        // Pass the blog data to the view for editing
        return view('edit_blog', ['blog' => $blog]);
    }

    // Blog Update
    public function updateBlog($id)
    {
        // Validate the form input
        if (!$this->validate([
            'title' => 'required|min_length[3]|max_length[255]',
            'content' => 'required|min_length[10]',
        ])) {
            
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Prepare data for update
        $blogModel = new BlogModel();
        $data = [
            'title'   => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
        ];

        // Update the blog in the database
        $blogModel->update($id, $data);

        // Redirect to the blogs page with a success message
        session()->setFlashdata('success', 'Blog updated successfully!');
        return redirect()->to('/dashboard/blogs');
    }
}


