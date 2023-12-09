<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table = 'posts';

    public function getPost($slug): array{
        $id = $this->where(['slug' => $slug]);
        return $this->find($id);
    }

    public function getPosts(): array {
        return $this->findAll(5);
    }

}