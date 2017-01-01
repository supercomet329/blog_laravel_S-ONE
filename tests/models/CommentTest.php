<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Comment;
use Carbon\Carbon;

class CommentTest extends TestCase
{
    use DatabaseMigrations;

    public function testCreatedAt()
    {
        $comment = factory(Comment::class)->create();
        $this->assertEquals($comment->created_at, Carbon::now());
    }

    public function testRelationWithAuthor()
    {
        $comment = factory(Comment::class)->create();
        $this->assertEquals($comment->author_id, $comment->author->id);
    }

    public function testRelationWithPost()
    {
        $comment = factory(Comment::class)->create();
        $this->assertEquals($comment->post_id, $comment->post->id);
    }
}
