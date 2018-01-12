<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Content
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property int $project_id
 * @property int $user_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Project $project
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Content whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Content whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Content whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Content whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Content whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Content whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Content whereUserId($value)
 * @mixin \Eloquent
 */
class Content extends Model
{
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
