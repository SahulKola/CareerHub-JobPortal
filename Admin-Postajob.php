<?php require 'Admin-Dashboard.php' ?>

<div class="box">
    <form action="">
        <h4>Post a Job</h4>
        <div class="mb-1">
            <label for="exampleFormControlInput1" class="form-label">Company Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tata Consultancy Services">
        </div>
        <div class="mb-1">
            <label for="exampleFormControlInput1" class="form-label">Position</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Full Stack Developer">
        </div>
        <div class="mb-1">
            <label for="exampleFormControlInput1" class="form-label">Location</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Hyderabad">
        </div>
        <div class="mb-1">
            <label for="exampleFormControlTextarea1" class="form-label">Job Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Breif about Job Description in Max 15 Words"></textarea>
        </div>
        <div class="mb-1">
            <label for="exampleFormControlInput1" class="form-label">Skills Required</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="HTML, CSS, Javascript, MongoDB">
        </div>
        <div class="mb-1">
            <label for="exampleFormControlInput1" class="form-label">Year of Passing</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="2022">
        </div>
        <div class="mb-1">
            <label for="exampleFormControlInput1" class="form-label">Salary</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="5.5 LPA">
        </div>  
        <button type="submit" value="Submit">Post</button>
    </form>
</div>