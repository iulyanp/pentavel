<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('body', 'Body:') !!}
    {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('published_at', 'Published on:') !!}
    {!! Form::input('date', 'published_at', date('Y-m-d'), ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('tag_list', 'Tags:') !!}
    {!! Form::select('tag_list[]', $tags, null, ['id' => 'tag_list', 'class'=>'form-control', 'multiple']) !!}
</div>


<div class="form-group">
    {!! Form::label('category_list', 'Category:') !!}
    {!! Form::select('category_list[]', $category, null, ['id' => 'category_list', 'class'=>'form-control', 'multiple']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary']) !!}
</div>

@section('javascript')
@parent()
<script>
$('#tag_list').select2({
    placeholder: 'Choose a tag',
    tags: true
});

$('#category_list').select2({
    placeholder: 'Choose a category',
    tags: true
});
</script>

@endsection