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
        $posts = $this->findAll(5);
        $start = 0;
        $end = sizeof($posts)-1;
        while ($start < $end)
        {
            $temp = $posts[$start];
            $posts[$start] = $posts[$end];
            $posts[$end] = $temp;
            $start++;
            $end--;
        }
        return $posts;

    }

}