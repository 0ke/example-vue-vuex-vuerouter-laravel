<?php
namespace App\Repositories;

use App\Album;
use App\Candidate;
use App\Contactmessage;
use App\Helpers\ImagePutter;
use App\Icon;
use App\Log;
use App\Permission;
use App\Post;
use App\Role;
use App\Seo;
use App\Sharelink;
use App\Storystream;
use App\Subtype;
use App\Type;
use App\User;

class Repository
{
    public function __construct(
        Album $album,
        Candidate $candidate,
        Contactmessage $cmessage,
        Icon $icon,
        ImagePutter $imageputter,
        Log $log,
        Permission $permission,
        Post $post,
        Role $role,
        Seo $seo,
        Sharelink $sharelink,
        Storystream $storystream,
        Subtype $subtype,
        Type $type,
        User $user) {
        $this->album = $album;
        $this->candidate = $candidate;
        $this->contactmessage = $cmessage;
        $this->icon = $icon;
        $this->log = $log;
        $this->permission = $permission;
        $this->post = $post;
        $this->role = $role;
        $this->seo = $seo;
        $this->sharelink = $sharelink;
        $this->storystream = $storystream;
        $this->subtype = $subtype;
        $this->type = $type;
        $this->user = $user;

        $this->imageputter = $imageputter;
    }

    public function findSeoble($slug, $seoble_type = false)
    {
        if ($seoble_type) {
            $model = $this->seo
                ->having('seoble_type', '=', $seoble_type)
                ->where('slug', '=', $slug)
                ->orWhere('slug_nl', '=', $slug)
                ->orWhere('slug_en', '=', $slug)
                ->firstOrFail();
        } else {
            $model = $this->seo
                ->where('slug', '=', $slug)
                ->orWhere('slug_nl', '=', $slug)
                ->orWhere('slug_en', '=', $slug)
                ->firstOrFail();
        }

        return ($model) ? $model->seoble : abort('404');
    }

    public function findBySeoId($id, $model = null)
    {
        return $this->seo
            ->where('seoble_type', '=', $model)
            ->where('seoble_id', '=', $id)
            ->first()->seoble;
    }

    public function findById($id, $model = null, $array = [])
    {
        //return eval('$this->' . $model . '->find(' . $id . ')');

        switch ($model) {
            case 'album':
                return $this->album->find($id);
                break;
            case 'cmessage':
                return $this->cmessage->find($id);
                break;
            case 'post':
                return $this->post->with($array)->find($id);
                break;
            case 'subtype':
                return $this->subtype->find($id);
                break;
            case 'type':
                return $this->type->find($id);
                break;
            case 'user':
                return $this->user->find($id);
                break;
        }
    }

    public function getAllFrom($model)
    {
        switch ($model) {
            case 'album':
                return $this->album;
                break;
            case 'cmessage':
                return $this->cmessage;
                break;
            case 'post':
                return $this->post;
                break;
            case 'todo':
                return $this->todo;
                break;
            case 'user':
                return $this->user;
                break;
            case 'storystream':
                return $this->storystream;
                break;
            case 'type':
                return $this->type;
                break;
            case 'tag':
                return $this->tag;
                break;
        }
    }

    public function orderBy($model, $tablename, $by, $array = [])
    {
        return $this->getAllFrom($model)->with($array)->orderBy($tablename, $by);
    }

    public function echoAsSeederString()
    {
        $posts = $this->orderBy('post', 'created_at', 'asc')->get();

        echo '$posts=[<br>';

        foreach ($posts as $post) {

            $type = $post->type_id ? $post->type_id : 'null';
            $subtype = $post->subtype_id ? $post->subtype_id : 'null';

            $string;
            $string =
            '[<br>' .
            '"subtype_id"=>' . $subtype .
            ',<br>"type_id"=>' . $type .
            ',<br>"concept"=>' . $post->concept .
            ",<br>'body_nl'=>'" . htmlspecialchars(str_replace("'", "\'", $post->body_nl)) .
            "',<br>'body_en'=>'" . htmlspecialchars(str_replace("'", "\'", $post->body_en)) .
            "',<br>
                'seo'=> <br>
                    [<br>
                    'seoble_type'=>'App\Post',<br>
                    'title_nl'=>'" . htmlspecialchars(str_replace("'", "\'", $post->seo->first()->title_nl)) . "',<br>
                    'title_en'=>'" . htmlspecialchars(str_replace("'", "\'", $post->seo->first()->title_en)) . "',<br>
                    'slug_nl'=>'" . $post->seo->first()->slug_nl . "',<br>
                    'slug_en'=>'" . $post->seo->first()->slug_en . "',<br>
                    'description_nl'=>'" . htmlspecialchars(str_replace("'", "\'", $post->seo->first()->description_nl)) . "',<br>
                    'description_en'=>'" . htmlspecialchars(str_replace("'", "\'", $post->seo->first()->description_en)) . "',<br>
                    ]
                <br>],<br>";
            echo $string;
        }

        echo '];';

        exit;
    }

}
