<?php

namespace App\Http\Controllers\Admin;

use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use Illuminate\Support\Facades\Validator;


class HomeSettingsController extends AdminController
{
    public function update(Request $request)
    {
        try {
            $home_settings = Settings::where('language_id', 1)->find(5);
            $home_settings_value = json_decode($home_settings->value);

            //** STATUS */
            $slider_status = false;
            $cards_status = false;
            $service_status = false;
            $highlights_status = false;
            $comment_status = false;
            $bottom_slider_status = false;

            /** VALIDATORS */
            // slider
            if ($request->slider_status) {
                if ($request->slider_status == 'on') {
                    $slider_status = true;
                }
            }

            // cards
            if ($request->cards_status) {
                if ($request->cards_status == 'on') {
                    $request->validate([
                        'card1_product_id' => ['required'],
                        'card1_button_text' => ['required'],
                        'card1_button_link' => ['required'],
                        'card2_product_id' => ['required'],
                        'card2_button_text' => ['required'],
                        'card2_button_link' => ['required'],
                        'card3_product_id' => ['required'],
                        'card3_button_text' => ['required'],
                        'card3_button_link' => ['required'],
                    ]);

                    $cards_status = true;
                }
            }

            // service
            if ($request->service_status) {
                if ($request->service_status == 'on') {
                    $request->validate([
                        'service1_title' => ['required'],
                        'service1_description' => ['required'],
                        'service2_title' => ['required'],
                        'service2_description' => ['required'],
                        'service3_title' => ['required'],
                        'service3_description' => ['required'],
                    ]);

                    $service_status = true;
                }
            }

            // highlight
            if ($request->highlights_status) {
                if ($request->highlights_status == 'on') {
                    $request->validate([
                        'highlight1_product_id' => ['required'],
                        'highlight2_product_id' => ['required'],
                        'highlight3_product_id' => ['required'],
                        'highlight4_product_id' => ['required'],
                        'highlight5_product_id' => ['required'],
                        'highlight6_product_id' => ['required'],
                    ]);


                    $highlights_status = true;
                }
            }

            // comments
            if ($request->comments_status) {
                if ($request->comments_status == 'on') {
                    $comment_status = true;
                }
            }

            // bottom slider
            if ($request->bottom_slider_status) {
                if ($request->bottom_slider_status == 'on') {
                    $bottom_slider_status = true;
                }
            }

            /** UPDATED DATA */
            $home_settings_value = [
                'slider' => [
                    'status' => $slider_status,
                    'content' => $home_settings_value->slider->content
                ],
                'cards' => [
                    'status' => $cards_status,
                    'content' => [
                        [
                            'product_id' => $request->card1_product_id,
                            'button_link' => $request->card1_button_link,
                            'button_text' => $request->card1_button_text,
                        ],
                        [
                            'product_id' => $request->card2_product_id,
                            'button_link' => $request->card2_button_link,
                            'button_text' => $request->card2_button_text,
                        ],
                        [
                            'product_id' => $request->card3_product_id,
                            'button_link' => $request->card3_button_link,
                            'button_text' => $request->card3_button_text,
                        ],
                    ],
                ],
                'services' => [
                    'status' => $service_status,
                    'content' => [
                        [
                            'title' => $request->service1_title,
                            'description' => $request->service1_description,
                        ],
                        [
                            'title' => $request->service2_title,
                            'description' => $request->service2_description,
                        ],
                        [
                            'title' => $request->service3_title,
                            'description' => $request->service3_description,
                        ],
                    ],
                ],
                'highlights' => [
                    'status' => $highlights_status,
                    'content' => [
                        [
                            'product_id' => $request->highlight1_product_id,
                        ],
                        [
                            'product_id' => $request->highlight2_product_id,
                        ],
                        [
                            'product_id' => $request->highlight3_product_id,
                        ],
                        [
                            'product_id' => $request->highlight4_product_id,
                        ],
                        [
                            'product_id' => $request->highlight5_product_id,
                        ],
                        [
                            'product_id' => $request->highlight6_product_id,
                        ]
                    ]
                ],
                'comments' => [
                    'status' => $comment_status,
                    'content' => $home_settings_value->comments->content
                ],
                'bottom_slider' => [
                    'status' => $bottom_slider_status,
                    'content' => $home_settings_value->bottom_slider->content
                ]
            ];

            /** UPDATE */
            $home_settings->value = json_encode($home_settings_value);
            $home_settings->update();

            return response()->json([
                "status" => true,
                "message" => "Home Settings Updated Successfully"
            ]);
        } catch (\Exception $e) {
            return response()->json([
                "status" => false,
                "message" => $e->getMessage()
            ]);
        }
    }

    public function addSlider(Request $request)
    {
        try {
            $home_settings = Settings::where('language_id', 1)->find(5);
            $home_settings_value = json_decode($home_settings->value);

            /** VALIDATORS */
            $request->validate([
                'slider_image' => ['required'],
                'slider_subtitle' => ['required'],
                'slider_title' => ['required'],
                'slider_description' => ['required'],
                'slider_button_text' => ['required'],
                'slider_button_link' => ['required'],
            ]);

            $file = $request->file('slider_image');
            $file_name = time() . \Str::random(8) . '.' . str_replace(' ', '', $file->getClientOriginalExtension());
            $file->move('assets/images/slider', $file_name);

            $old_slider_content = $home_settings_value->slider->content;
            $old_slider_content[sizeof($old_slider_content)] = [
                'image' => $file_name,
                'subtitle' => $request->slider_subtitle,
                'title' => $request->slider_title,
                'description' => $request->slider_description,
                'button_text' => $request->slider_button_text,
                'button_link' => $request->slider_button_link
            ];

            /** UPDATED DATA */
            $home_settings_value->slider = [
                'status' => $home_settings_value->slider->status,
                'content' => $old_slider_content
            ];

            /** UPDATE */
            $home_settings->value = json_encode($home_settings_value);
            $home_settings->update();

            return response()->json([
                "status" => true,
                "message" => "Slider Settings Updated Successfully"
            ]);
        } catch (\Exception $e) {
            return response()->json([
                "status" => false,
                "message" => $e->getMessage()
            ]);
        }
    }

    public function deleteSlider($index)
    {
        try {
            $img = Slider::find($index);

        unlink(public_path('assets/images/slider/' .$img->image));


         $img->delete();
        return response()->json("ok");


        } catch (\Exception $e) {
            return response()->json($e->getMessage());
         //   return redirect()->back()->with(['delete' =>  $e->getMessage()]);
        }
    }

    public function addBottomSlider(Request $request)
    {
        try {
            $home_settings = Settings::where('language_id', 1)->find(5);
            $home_settings_value = json_decode($home_settings->value);

            /** VALIDATORS */
            $request->validate([
                'bottom_slider_image' => ['required'],
            ]);

            $file = $request->file('bottom_slider_image');
            $file_name = time() . \Str::random(8) . '.' . str_replace(' ', '', $file->getClientOriginalExtension());
            $file->move('assets/images/slider', $file_name);

            $old_slider_content = $home_settings_value->bottom_slider->content;
            $old_slider_content[sizeof($old_slider_content)] = [
                'image' => $file_name,
            ];

            /** UPDATED DATA */
            $home_settings_value->bottom_slider = [
                'status' => $home_settings_value->slider->status,
                'content' => $old_slider_content
            ];

            /** UPDATE */
            $home_settings->value = json_encode($home_settings_value);
            $home_settings->update();

            return response()->json([
                "status" => true,
                "message" => "Bottom Slider Settings Updated Successfully"
            ]);
        } catch (\Exception $e) {
            return response()->json([
                "status" => false,
                "message" => $e->getMessage()
            ]);
        }
    }

    public function deleteBottomSlider($index)
    {
        try {
            $home_settings = Settings::where('language_id', 1)->find(5);
            $home_settings_value = json_decode($home_settings->value);

            // image
            $path = public_path() . '/assets/images/slider/' . $home_settings_value->bottom_slider->content[$index]->image;
            if (File::exists($path)) File::delete($path);

            // if we unset(data) changes the json structure
            $new_data = [];
            $temp = 0;
            for ($i = 0; $i < sizeof($home_settings_value->bottom_slider->content); $i++) {
                if ($i != $temp) {
                    $new_data[$temp] = $home_settings_value->bottom_slider->content[$i];
                    $temp++;
                }
            }

            $home_settings_value->bottom_slider = [
                'status' => $home_settings_value->slider->status,
                'content' => $new_data
            ];

            /** UPDATE */
            $home_settings->value = json_encode($home_settings_value);
            $home_settings->update();

            return redirect()->back()->with(['success' => "Bottom Slider Deleted Successfully"]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['fail' => $e->getMessage()]);
        }
    }

    public function addComment(Request $request)
    {
        try {
            $home_settings = Settings::where('language_id', 1)->find(5);
            $home_settings_value = json_decode($home_settings->value);

            /** VALIDATORS */
            $request->validate([
                'comments_customer_name' => ['required'],
                'comments_customer_title' => ['required'],
                'comments_customer_comment' => ['required'],
                'comments_customer_rate' => ['required'],
            ]);

            $old_content = $home_settings_value->comments->content;
            $old_content[sizeof($old_content)] = [
                'customer_name' => $request->comments_customer_name,
                'customer_title' => $request->comments_customer_title,
                'customer_comment' => $request->comments_customer_comment,
                'customer_rating' => $request->comments_customer_rate
            ];

            /** UPDATED DATA */
            $home_settings_value->comments = [
                'status' => $home_settings_value->comments->status,
                'content' => $old_content
            ];

            /** UPDATE */
            $home_settings->value = json_encode($home_settings_value);
            $home_settings->update();

            return response()->json([
                "status" => true,
                "message" => "Comments Updated Successfully"
            ]);
        } catch (\Exception $e) {
            return response()->json([
                "status" => false,
                "message" => $e->getMessage()
            ]);
        }
    }

    public function deleteComment($index)
    {
        try {
            $home_settings = Settings::where('language_id', 1)->find(5);
            $home_settings_value = json_decode($home_settings->value);

            // if we unset(data) changes the json structure
            $new_data = [];
            $temp = 0;
            for ($i = 0; $i < sizeof($home_settings_value->comments->content); $i++) {
                if ($i != $index) {
                    $new_data[$temp] = $home_settings_value->comments->content[$i];
                    $temp++;
                }
            }

            $home_settings_value->comments = [
                'status' => $home_settings_value->comments->status,
                'content' => $new_data
            ];

            /** UPDATE */
            $home_settings->value = json_encode($home_settings_value);
            $home_settings->update();

            return redirect()->back()->with(['success' => "Comment Deleted Successfully"]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['fail' => $e->getMessage()]);
        }
    }

    public function cuslider(Request $request){
        return $request;
    }

    public function createUpdateSlider(SliderRequest  $sliderRequest){



        try {
            $validator = Validator::make($sliderRequest->all(), $sliderRequest->rules());


            if ($validator->passes()) {

                if (!$sliderRequest->hasFile('image')) {
                    die();
                }


                   $file = $sliderRequest->file('image');
                    $extension = $file->getClientOriginalExtension();
                    $filename =  'Slider_' . uniqid() . '.' . $extension;
                    $targetPath = public_path('assets/images/slider/');
                    $file->move($targetPath, $filename);




                 $slider = (!empty($sliderRequest['id']))?Slider::find($sliderRequest['id']):new Slider();
                    $slider->image = $filename;
                    $slider->title = $sliderRequest['title'];
                    $slider->subtitle = $sliderRequest['subtitle'];
                    $slider->location = $sliderRequest['location'];
                    $slider->description = (!empty($sliderRequest['description']))?$sliderRequest['description']:'';
                    $slider->button_text = (!empty($sliderRequest['button_text']))?$sliderRequest['button_text']:'';
                    $slider->button_link = (!empty($sliderRequest['button_link']))?$sliderRequest['button_link']:'';
                    $slider->order = (!empty($sliderRequest['order']))?$sliderRequest['order']:1;

                 $slider->save();

                    ///create slide
                return response()->json([
                    "status" => true,
                    "message" =>  (!empty($sliderRequest['id']))?'slider updated':'slider created'
                ]);
            }else{

                return response()->json([
                    "status" => false,
                    "message" => 'Slider creation failed',
                    "errors" => $validator->errors() // Return the validation errors
                ], 422);
            }


        } catch (\Exception $e) {

            return response()->json([
                "status" => false,
                "message" => $e->getMessage()
            ]);
        }


    }


    private function uploadSlideFile(){

    }




}
