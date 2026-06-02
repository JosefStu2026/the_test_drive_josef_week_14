<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController
{
    // READ: Fetch all users and send them to the View
    public function index()
    {
        $model = new UserModel();
        
        // NEW CONCEPT: Passing Data to Views
        // We package our data into an associative array. 
        // The key 'users' becomes a variable $users inside our HTML view.
        $data['users'] = $model->findAll();
        
        return view('users/index', $data);
    }

    // CREATE (Part 1): Load the blank form
    public function create()
    {
        return view('users/create');
    }

    // CREATE (Part 2): Save the form data to the database
    public function store()
    {
        $model = new UserModel();
        
        // NEW CONCEPT: $this->request->getPost()
        // This grabs all the data the user typed into the HTML form.
        $data = [
            'name'  => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
        ];

        // 1. Define strict rules for our inputs
        $rules = [
        'name'  => 'required|min_length[3]|max_length[50]',
        'email' => 'required|valid_email|is_unique[users.email]'
    ];

    // 2. Define custom, user-friendly error messages
        $messages = [
        'name' => [
            'required'   => 'You forgot to tell us your name.',
            'min_length' => 'Your name must be at least 3 characters long.'
        ],
        'email' => [
            'required'    => 'An email address is mandatory.',
            'valid_email' => 'Please enter a legitimate email address.',
            'is_unique'   => 'That email address is already taken by another user.'
        ]
    ];

    // 3. Run the check. If it fails, reload the form and pass the validation data back
    if (!$this->validate($rules, $messages)) {
        return view('users/create', [
            'validation' => $this->validator // Passes the specific errors to the HTML view
        ]);
    }

    // 4. If validation PASSES, execute the database insertion as usual
    $model = new UserModel();
    $data = [
        'name'  => $this->request->getPost('name'),
        'email' => $this->request->getPost('email'),
    ];
        
        $model->insert($data);
        
        // NEW CONCEPT: Redirects
        // After saving, send the user back to the list of all users.
        return redirect()->to('/users');
    }

    // UPDATE (Part 1): Load the edit form with existing data
    public function edit($id)
    {
        $model = new UserModel();
        
        // Fetch the specific user using the ID from the URL
        $data['user'] = $model->find($id);
        
        return view('users/edit', $data);
    }

    // UPDATE (Part 2): Save the changes
    public function update($id)
    {
        $model = new UserModel();
        
        $data = [
            'name'  => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
        ];
        
        // Update the specific user ID with the new data
        $model->update($id, $data);
        
        return redirect()->to('/users');
    }

    // DELETE: Remove the user
    public function delete($id)
    {
        $model = new UserModel();
        $model->delete($id);
        
        return redirect()->to('/users');
    }
}

