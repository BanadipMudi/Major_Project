@extends('user.index')

@section('content-section')
@if($answers->count() > 0)
@foreach($answers as $answer)
<div class="post p-2 rounded mt-3 mb-3" data-deleteanswer_id="{{ $answer->id }}" style="box-shadow: 0 3px 7px 0 rgba(0, 0, 0, .13), 0 1px 2px 0 rgba(0, 0, 0, .11);">
       <!--------------------------------- first portion of this card ------------------name,date,tag,question,name of user2------------------------------------------------->
       <div class="row ps-2 pe-2">
        <div class="col-lg-12 d-flex justify-content-start align-items-center">
          <!-- <div class="profile2">
            <img src="https://artriva.com/media/k2/items/cache/c889234799e865bbe90cee71f6cd2e53_XL.jpg" alt="" style="height: 50px;width: 50px;border-radius: 50%;">
          </div> -->
          <div class="name-tag ps-2">
              <h6 class="fw-bolder pb-0 mb-0 text-dark align-items-center" style="font-size: 12px;">
                 <a href="" class="text-secondary">you</a> 
                    commented on 
                    <div class="d-inline-block pt-2" style="max-width: 200px;height:25px;overflow-y: hidden;overflow-x: hidden;">
                    <a href="{{ route('user.post',['id'=>$answer->question->id]) }}" class="text-secondary">
                      
                          <!-- this question -->
                          {{  strip_tags($answer->question->question) }}
                    </a>
                    </div>
                <i class="fa-solid fa-circle pe-1 ps-1 text-success fw-bolder" style="font-size: 8px;""></i>
                  {{ $answer->created_at }}
                <i class="fa-solid fa-circle pe-1 ps-1 text-warning fw-bolder" style="font-size: 8px;""></i>
                  posted by 
                <a href="/user/profile/{{ $answer->question->newuser->id }}" class="text-secondary">{{ $answer->question->newuser->name }}</a>
              </h6>
            
              <h6 class="fw-bolder pb-0 mb-0 pt-1 d-flex" style="font-size: 12px;">
                <a href="" class="tag d-flex align-items-center pe-3 bg-primary text-light p-2 rounded-pill me-3"><span class="material-symbols-outlined pe-1" style="font-size: 12px;">local_offer</span> {{ $answer->question->catagory_id }}</a>
                <a href="" class="tag d-flex pe-3 align-items-center bg-success text-light p-2 rounded-pill"><span class="material-symbols-outlined pe-1" style="font-size: 12px;">local_offer</span> {{ $answer->question->subcatagory_id }}</a>
              </h6>
          </div>
        </div>

        
      </div>
      <hr class="mt-3 mb-3 text-primary">
      <!--------------------------------- first portion of this card ------------------------------------ end ------------------------------->
       
        <!-- ------------------------------------------------------------answers portion -------------------------------->
        <div style="overflow: auto;"> 
             {!! $answer->answer !!}
        </div>
        <hr class="mt-3 mb-3 text-primary">
        <!-- ------------------------------------------------------------answers portion --------------------------- end --------->

        <div class="row ps-4">
          <!-- ------------------------------------------------------------third portion --------------------------- delete,edit,pending --------->
        <div class="col-lg-5 d-flex justify-content-start p-2 align-items-center">
          <h6 class="pe-4 text-success like" style="cursor:pointer;font-size: 12px;"><span class="material-symbols-outlined" >thumb_up</span> {{ $answer->like }} </h5>
          <h6 class="pe-4 text-danger like" style="cursor:pointer;font-size: 12px;"><span class="material-symbols-outlined" >thumb_down</span> {{ $answer->dislike }} </h5>
          
        </div>
        <div class="col-lg-7 d-flex justify-content-end align-items-center">
                   @if( $answer->flag==0 )
                      
                   <button class="delete_ans btn btn-danger rounded-pill ps-4 pe-4 pt-0 pb-0 me-3 mb-2" value="{{ $answer->id }}_{{ $answer->user_id }}">
                  <span class="material-symbols-outlined pt-1">
                  delete
                  </span>
                </button>
                  @endif
              
                
                <button class="pending_status btn btn-light rounded-pill me-3 mb-2" value="pending action">
                  @if( $answer->flag==0 )
                      <span class="material-symbols-outlined pt-1">
                          pending_actions
                      </span>
                  @else
                      <i class="fa-solid fa-circle-check fs-4 fw-bold text-success"></i>
                  @endif
                </button>
        </div>
       <!-- ------------------------------------------------------------third portion --------------------------- end --------->
        </div>
      </div>

@endforeach
@else
           <div class="border p-3 mt-3 d-flex justify-content-center align-items-center flex-column">
              <img style="height:200px;width:350px;" src="https://cdni.iconscout.com/illustration/premium/thumb/man-holding-magnifying-glass-doing-marketing-research-from-sites-2511649-2133727.png" alt="">
              <h4 class="text-primary text-center fx-bold mt-3">Sorry! No Answers Found :(</h4>
            </div>
@endif
<div class="alert alert-danger fw-bold text-center error-alert w-50" style="display:none;"></div>  
<button type="button" class="btn btn-primary alert-bookmark d-none" data-bs-toggle="modal" data-bs-target="#exampleModal">
       Launch demo modal
    </button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content p-4">
      
      <div class="modal-body mt-2 mb-1 p-2 text-dark fs-5 fw-bold text-center">
        <p><i class="fa-solid fa-circle-exclamation fs-2  text-danger"></i> </p>
      Are you sure you want to remove this Answers? 
        <p class="fw-lighter text-start fs-6 pt-3"> This will remove this answers permanently. you cannot undo this action.</p>
      </div>
      
      <div class="modal-footer border border-0 d-flex justify-content-center">
        <button type="button" class="btn fw-bold delete-off btn-light col-5 border border-dark" data-bs-dismiss="modal">Cancel</button>
        <input type="hidden" name="" id="hidden_field">
        <button type="button" class="btn fw-bold delete-accept btn-danger col-5">Delete</button>
      </div>

      <div class="modal-body2 d-none mt-3 mb-1 p-2 d-flex justify-content-center align-items-center flex-column">
                    <i class="fa-regular fa-circle-check text-success mb-2" style="font-size: 80px;"></i>
                     <p class="text-dark fw-bold fs-3 mt-3">Successfully Removed.</p>
      </div>
    
    </div>
  </div>
</div>
@endsection


@section('ajaxfor')
<link rel="stylesheet" href="{{ asset('css/view_single_page.css') }}">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" ></script>
<script>
  $(document).ready(function(){

    $(document).on('click','.like',function(){
      $('.error-alert').html('').html("you don't like or dislike on your post.").fadeIn();
      setTimeout(() => {
        $('.error-alert').fadeOut();
      }, 3000);
    });

    $(document).on('click','.delete_ans',function(){
      var all_id=$(this).val();
            $('.modal-body').removeClass('d-none');
            $('.modal-footer').removeClass('d-none');
            $('.modal-body2').addClass('d-none');
      $('.alert-bookmark').trigger('click');
      $('#hidden_field').val(all_id);
    });

    $('.delete-accept').click(function(){
        all_answers_id=$('#hidden_field').val();
        all_answers_id=all_answers_id.split('_');
        let answer_id=all_answers_id[0];
        let user_id=all_answers_id[1];
        //console.log(question_id+user_id);
        $.ajax({
          url:"{{ route('myanswer.delete') }}",
          method:"POST",
          data:{answer_id:answer_id,user_id:user_id,_token:"{{ csrf_token() }}"},
          success:function(responce){
            if(responce.success_status==true){
              $('.modal-body').addClass('d-none');
              $('.modal-footer').addClass('d-none');
              $('.modal-body2').removeClass('d-none');
              setTimeout(() => {
                $('.delete-off').trigger('click');
                $('.post[data-deleteanswer_id="' + answer_id + '"]').remove();
                //window.location.href = "{{ route('user.bookmark') }}";
              }, 700);
            }
            
             //console.log(responce.sent);
          }
        });
        
      });

  });
</script>   
@endsection          