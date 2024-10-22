<?php

namespace App\Observers;

use App\Models\Slider;

class SliderObserver
{
   public function saved(Slider $slider){

    // if($slider->isDirty('order')){ /// rank is changed

    //     //   Log::channel('data_check')->info($category->getOriginal('rank')." new:".$category['rank']);
    //        $old_rank = $slider->getOriginal('order');
    //        if($slider['order'] > $old_rank){
            Slider ::where('id', '!=', $slider['id'])
                   ->where('location','=',$slider['location'])
                   ->where('order','>=',$slider['order'])
                   ->increment('order',1);
    //        }else{
    //            Category::where('id', '!=', $category['id'])
    //            ->where('parent_id','=',$category['parent_id'])
    //                ->where('type','=',$category['type'])
    //                ->where('rank','>=',$category['rank'])
    //                ->where('rank','<',$old_rank)
    //                ->increment('rank',1);


    //        }
    //    }
   }

   public function deleted(Slider $slider){
    Slider ::where('id', '!=', $slider['id'])
    ->where('location','=',$slider['location'])
    ->where('order','>=',$slider['order'])
    ->decrement('order',1);
   }
}
