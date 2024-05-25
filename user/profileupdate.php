<?php include('user_header.php') ?>
                      <div class="container-fluid">
                        <h3 class="text-center">Create Your Account</h3>
                        <form method="post" action="" return onsubmit="call()">
                          <div class="form-outline ">
                            <label class="form-label" for="form3Example1cg"
                              >Your FullName</label
                            >
                            <input
                              type="text"
                              id="form3Example1cg"
                              class="form-control form-control-lg"
                              name="name"
                              pattern="[A-Za-z]{3,50}"
                              required
                            />
                          </div>

                          <div class="form-outline ">
                            <label class="form-label" for="form3Example3cg"
                              >Your Email</label
                            >
                            <input
                              type="email"
                              name="email"
                              id="form3Example3cg"
                              class="form-control form-control-lg"
                              required
                            />
                          </div>

                          <div class="form-outline ">
                            <label class="form-label" for="form3Example3cg"
                              >Your Number</label
                            >
                            <input
                              type="text"
                              name="number"
                              id="form3Example3cg"
                              class="form-control form-control-lg"
                              pattern="[0-9]{10}"
                              required
                            />
                          </div>

                          <div class="form-outline ">
                            <label class="form-label" for="form3Example4cg"
                              >Password</label
                            >
                            <input
                              type="password"
                              name="password"
                              id="form3Example4cg"
                              class="form-control form-control-lg"
                            
                              required
                            />
                          </div>

                          <div class="form-outline mb-1">
                            <label class="form-label" for="form3Example4cdg"
                              >Your Address</label
                            >
                            <textarea
                              id="form3Example4cdg"
                              name="address"
                              class="form-control form-control-lg"
                              required
                            ></textarea>
                          </div>
                          <div class="d-flex justify-content-center">
                            <input type="submit" name="submit" value="register" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">
                          </div>
                        </form>
                      </div>