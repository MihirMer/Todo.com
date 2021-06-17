@extends('layouts.app')

@section('content')
    <div class="container p-3">
        <div class="row mt-3">
            <div class="col-md-3"></div>
            <form class="col-md-6 bg-light p-3"
                  action="{{ route('addNote') }}" method="post" NOVALIDATE>

                <div class="text-center mb-3">
                    <p class="h3 mx-auto">New ToDo</p>
                </div>



                @csrf
                <div class="form-group">
                    <label for="todo_title">Title</label>
                    <input type="text" class="form-control @error('todo_title') is-invalid @enderror" id="todo_title"
                           placeholder="" name="todo_title" value="{{ old('todo_title') }}">
                    @error('todo_title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>



                <div class="form-group">
                    <label for="todo_deadline">Deadline</label>
                    <div class="datepicker date input-group" id="datetimepicker">
                        <input type="text" id="todo_deadline" name="todo_deadline" placeholder="Choose a deadline"
                               class="form-control @error('todo_deadline') is-invalid @enderror"
                               value="{{ old('todo_deadline') }}" readonly>
                        <div class="input-group-addon input-group-append">
                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                        </div>
                        @error('todo_deadline')
                        <div class="invalid-feedback">
                            {{ $message  }}
                        </div>
                        @enderror
                    </div>

                </div>

                <div class="form-group">

                    <label for="todo_category">Category</label>

                    <select id="todo_category" name="todo_category"
                            class="custom-select @error('todo_category') is-invalid @enderror">
                        <option value="0" selected>Uncategorized</option>
                        <option value="1" @if(old('todo_category')=='1') selected @endif>Work</option>
                        <option value="2" @if(old('todo_category')=='2') selected @endif>Home</option>
                        <option value="3" @if(old('todo_category')=='3') selected @endif>Study</option>
                        <option value="4" @if(old('todo_category')=='4') selected @endif>Personal</option>
                    </select>
                    @error('todo_category')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="todo_priority">Priority</label>
                    <div class="form-control @error('todo_priority') is-invalid @enderror"
                         style="text-align: center">
                        <div class="form-check form-check-inline mx-3">
                            <input class="form-check-input" type="radio" name="todo_priority" id="inlineRadio1"
                                   value="1" @if(old('todo_priority')=='1') checked @endif>
                            <label class="form-check-label" for="inlineRadio1">1</label>
                        </div>
                        <div class="form-check form-check-inline mx-3">
                            <input class="form-check-input" type="radio" name="todo_priority" id="inlineRadio2"
                                   value="2" @if(old('todo_priority')=='2') checked @endif>
                            <label class="form-check-label" for="inlineRadio2">2</label>
                        </div>
                        <div class="form-check form-check-inline mx-3">
                            <input class="form-check-input" type="radio" name="todo_priority" id="inlineRadio3"
                                   value="3" @if(old('todo_priority')=='3') checked @endif>
                            <label class="form-check-label" for="inlineRadio3">3</label>
                        </div>
                        <div class="form-check form-check-inline mx-3">
                            <input class="form-check-input" type="radio" name="todo_priority" id="inlineRadio4"
                                   value="4" @if(old('todo_priority')=='4') checked @endif>
                            <label class="form-check-label" for="inlineRadio4">4</label>
                        </div>
                        <div class="form-check form-check-inline mx-3">
                            <input class="form-check-input" type="radio" name="todo_priority" id="inlineRadio5"
                                   value="5" @if(old('todo_priority')=='5') checked @endif>
                            <label class="form-check-label" for="inlineRadio5">5</label>
                        </div>
                    </div>

                    @error('todo_priority')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="todo_comment">Comment</label>
                    <textarea class="form-control @error('todo_comment') is-invalid @enderror" id="todo_comment"
                              rows="3"
                              placeholder="Write a comment..."
                              name="todo_comment">{{ old('todo_comment') }}</textarea>
                    @error('todo_comment')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary px-5 mt-3">Add</button>
                </div>

            </form>
            <div class="col-md-3"></div>
        </div>
    </div>

@endsection
