<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
class Event extends Model implements Viewable{
    protected $guarded = [];
    protected $timpstamps = ['event_date'];
    use HasFactory;
    use InteractsWithViews;
    public function getImageSrcAttribute(){
      return url('storage/app/images/events').'/'.$this->image;
    }
}
