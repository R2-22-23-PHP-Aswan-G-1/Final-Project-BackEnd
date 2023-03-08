<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTestimonialRequest;
use App\Http\Resources\TestimonialResource;

class TestimonialController extends Controller
{


    public function index()
    {
        $testimonials = Testimonial::all();
        return TestimonialResource::collection($testimonials);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestimonialRequest $request)
    {
        Testimonial::create([
            'body' => $request->body,
            'rate' => $request->rate,
            'instructor_id' => $request->instructur_id,
            'user_id' => $request->user_id
        ]);
        return ['message' => 'success'];
    }

    public function show($testimonial)
    {
        $testimonial = Testimonial::find($testimonial);
        return new TestimonialResource($testimonial);
    }

    public function update(Request $request, $id)
    {
        $testimonial = Testimonial::where('id', $id)->update([
            'body' => $request->body,
            'rate' => $request->rate
        ]);
        return  ['message', 'updated'];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($testimonial)
    {
        Testimonial::destroy($testimonial);
        return "deleted";
    }
}
