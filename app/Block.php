<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    protected $fillable = ['category', 'reason', 'temporal', 'user_id'];

    public function user()
    {
        return $this->hasOne('App\User');
    }

    public static function laratablesOrderName()
    {
        return 'category';
    }

    public static function laratablesCustomAction($block)
    {
        try {
            return view('blocks.includes.action', ['block' => $block])->render();
        } catch (\Throwable $e) {
            return 'error';
        }
    }

    public static function getList()
    {
        $blocks = Block::orderBy('category')->get();
        $listBlocks = [];
        foreach ($blocks as $block) {
            $listBlocks[$block->id] = $block->category;
        }
        return $listBlocks;
    }
}