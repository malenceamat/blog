@extends('site.osnova')
    <!DOCTYPE html>
@include('site.style')


<div class="light-wrapper">
    <div class="container inner">
        <div class="thin">
            <h2 class="post-title">Get in Touch </h2>
            @error('name')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            @error('email')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            @error('phone')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            @error('message')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            <p>Nullam quis risus eget urna mollis ornare vel eu leo. Fusce dapibus, tellus ac cursus commodo, tortor
                mauris condimentum nibh, ut fermentum massa justo sit amet risus. Integer posuere erat a ante venenatis
                dapibus posuere velit aliquet. Maecenas faucibus.</p>
            <div class="divide10"></div>
            <div class="form-container">
                <form action=/svyaz method="POST" class="vanilla vanilla-form" novalidate="novalidate">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-field">
                                <label>
                                    <input type="text" name="name" placeholder="Your name" required="required">
                                    <i class="icon-user"></i>
                                </label>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-field">
                                <label>
                                    <input type="email" name="email" placeholder="Your e-mail" required="required">
                                    <i class="icon-mail-alt"></i>
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-field">
                                <label>
                                    <input type="tel" name="phone" placeholder="8-123-456-78-90">
                                    <i class="icon-phone"></i>
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-field">
                                <label class="custom-select">
                                    <select name="select" required="required">
                                        <option value="Закупка">Закупка</option>
                                        <option value="Маркетинг">Маркетинг</option>
                                        <option value="Другое">Другое</option>
                                    </select>
                                    <i class="icon-ok"></i><span></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <textarea name="message" placeholder="Type your message here..."></textarea>
                    <input type="submit" class="btn" value="Send" data-error="Fix errors" data-processing="Sending..."
                           data-success="Thank you!">
                    <label>
                        <input type="hidden" name="hidden" value="Не зарегистрирован">
                    </label>
                </form>
            </div>
        </div>
    </div>
</div>





