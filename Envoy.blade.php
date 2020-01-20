@servers(['web' => '127.0.0.1'])

@story('deploy')
    foo
@endstory

{{-- @macro('deploy')
    foo
@endmacro --}}

@task('foo')
    echo "HELLO"
@endtask


@finished
    echo "Deploy succeeded";
@endfinished