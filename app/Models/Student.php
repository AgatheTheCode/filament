<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Student extends Model
{
    use HasFactory;
    protected $fillable = ['last_name', 'first_name', 'email', 'study_id'];

    public function study(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Study::class);
    }
}
