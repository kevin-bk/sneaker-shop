@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">

            <form method="POST" enctype="multipart/form-data"
                  action="{{ admin_url('product_categories') }}{{ ($product_category->id ?? 0) > 0 ?'/'.$product_category->id: '' }}">
                @csrf
                @if (!empty($product_category->id))
                    @method('PUT')
                @endif

                <input type="hidden" name="parent_id"
                       value="{{ old('parent_id', ($product_category->parent_id ?? @request('parent_id', 0))) }}">

                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-edit"></i> {{ trans('common.form') }}
                        <div class="card-header-actions">
                            <a class="btn btn-minimize" href="#" data-toggle="collapse" data-target="#collapseExample"
                               aria-expanded="true">
                                <i class="icon-arrow-up"></i>
                            </a>
                        </div>
                    </div>

                    <div class="card-body collapse show" id="collapseExample">
                        <div class="form-group">
                            <label class="col-form-label" for="title">{{ trans('product.title') }}</label>
                            <div class="controls">
                                <input type="text"
                                       name="title"
                                       id="title"
                                       value="{{ old('title', $product_category->title ?? '') }}"
                                       class="form-control @error('title') is-invalid @enderror"
                                />

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="slug">{{ trans('product.slug') }}</label>
                            <div class="controls">
                                <input type="text" name="slug" id="slug"
                                       value="{{ old('slug', $product_category->slug ?? '') }}" class="form-control">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-form-label"
                                   for="description">{{ trans('product.description') }}</label>
                            <div class="controls">
                                <textarea class="form-control" id="description" rows="5"
                                          name="description">{{ old('description', $product_category->description ?? '') }}</textarea>
                            </div>
                        </div>

                        @include('admin.element.form.image', ['name' => 'image_id', 'image_id' => $product_category->image_id ?? '', 'image_url' => $product_category->image_url ?? ''])

                        <div class="form-group">
                            <label class="col-form-label" for="show_in_front">Show ở home page?</label>
                            <div class="controls">
                                <select class="form-control" name="show_in_front" id="show_in_front">
                                    <option value="0" @if($product_category->show_in_front) selected="selected" @endif >No</option>
                                    <option value="1" @if($product_category->show_in_front) selected="selected" @endif>Yes</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="sort_order">Thứ tự ưu tiên</label>
                            <div class="controls">
                                <input type="number"
                                       name="sort_order"
                                       id="sort_order"
                                       value="{{ old('sort_order', $product_category->sort_order ?? '') }}"
                                       class="form-control @error('sort_order') is-invalid @enderror"
                                />

                            </div>
                        </div>

                        <div class="form-actions">
                            <button class="btn btn-primary" type="submit">
                                <i class="fa fa-save"></i>
                                {{ trans('common.save') }}
                            </button>
                        </div>
                    </div>
                </div>


                <!-- seo form -->
                @include('admin.element.form_seo', ['info' => $product_category ?? ''])

            </form>

            @if (!empty($product_category->id))
                <div class="row mb-5">
                    <div class="col-lg-12">
                        <div class="form-actions text-lg-right">
                            <form method="POST" action="{{ admin_url('product_categories/'.$product_category->id ) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">
                                    <i class="fa fa-trash"></i>
                                    {{ trans('common.trash') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endif
        </div>

    </div>
@endsection
