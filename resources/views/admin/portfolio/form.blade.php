<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'Title' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($portfolio->title) ? $portfolio->title : ''}}" >
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    <label for="content" class="control-label">{{ 'Content' }}</label>
    <textarea class="form-control" rows="5" name="content" type="textarea" id="content" >{{ isset($portfolio->content) ? $portfolio->content : ''}}</textarea>
    {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('main_img') ? 'has-error' : ''}}">
    <label for="main_img" class="control-label">{{ 'Main Img' }}</label>
    <input class="form-control" name="main_img" type="text" id="main_img" value="{{ isset($portfolio->main_img) ? $portfolio->main_img : ''}}" >
    {!! $errors->first('main_img', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('sort') ? 'has-error' : ''}}">
    <label for="sort" class="control-label">{{ 'Sort' }}</label>
    <input class="form-control" name="sort" type="number" id="sort" value="{{ isset($portfolio->sort) ? $portfolio->sort : ''}}" >
    {!! $errors->first('sort', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('short_desc') ? 'has-error' : ''}}">
    <label for="short_desc" class="control-label">{{ 'Short Desc' }}</label>
    <input class="form-control" name="short_desc" type="text" id="short_desc" value="{{ isset($portfolio->short_desc) ? $portfolio->short_desc : ''}}" >
    {!! $errors->first('short_desc', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
