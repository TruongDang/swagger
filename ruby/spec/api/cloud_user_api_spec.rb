=begin
CloudBoost Application API

Power your web or mobile application backend with cloudboost Database Service

OpenAPI spec version: 1.0.0
Contact: ben@cloudboost.io
Generated by: https://github.com/swagger-api/swagger-codegen.git

License: MIT
http://opensource.org/licenses/MIT

Terms of Service: https://cloudboost.io

=end

require 'spec_helper'
require 'json'

# Unit tests for SwaggerClient::CloudUserApi
# Automatically generated by swagger-codegen (github.com/swagger-api/swagger-codegen)
# Please update as you see appropriate
describe 'CloudUserApi' do
  before do
    # run before each test
    @instance = SwaggerClient::CloudUserApi.new
  end

  after do
    # run after each test
  end

  describe 'test an instance of CloudUserApi' do
    it 'should create an instact of CloudUserApi' do
      @instance.should be_a(SwaggerClient::CloudUserApi)
    end
  end

  # unit tests for add_to_role
  # add a user to a role
  # 
  # @param app_id ID of app
  # @param body request body
  # @param [Hash] opts the optional parameters
  # @return [CloudUser]
  describe 'add_to_role test' do
    it "should work" do
      # assertion here
      # should be_a()
      # should be_nil
      # should ==
      # should_not ==
    end
  end

  # unit tests for change_password
  # change a password
  # changes the password for a logged in user without logging them out
  # @param app_id ID of app
  # @param body request body
  # @param [Hash] opts the optional parameters
  # @return [CloudUser]
  describe 'change_password test' do
    it "should work" do
      # assertion here
      # should be_a()
      # should be_nil
      # should ==
      # should_not ==
    end
  end

  # unit tests for login
  # login existing user
  # 
  # @param app_id ID of app
  # @param body request body
  # @param [Hash] opts the optional parameters
  # @return [CloudUser]
  describe 'login test' do
    it "should work" do
      # assertion here
      # should be_a()
      # should be_nil
      # should ==
      # should_not ==
    end
  end

  # unit tests for logout
  # logout user
  # 
  # @param app_id ID of app
  # @param body request body
  # @param [Hash] opts the optional parameters
  # @return [CloudUser]
  describe 'logout test' do
    it "should work" do
      # assertion here
      # should be_a()
      # should be_nil
      # should ==
      # should_not ==
    end
  end

  # unit tests for remove_from_role
  # remove a user from a role
  # 
  # @param app_id ID of app
  # @param body request body
  # @param [Hash] opts the optional parameters
  # @return [CloudUser]
  describe 'remove_from_role test' do
    it "should work" do
      # assertion here
      # should be_a()
      # should be_nil
      # should ==
      # should_not ==
    end
  end

  # unit tests for reset_password
  # reset a password
  # sends a password reset link to the given email
  # @param app_id ID of app
  # @param body request body
  # @param [Hash] opts the optional parameters
  # @return [String]
  describe 'reset_password test' do
    it "should work" do
      # assertion here
      # should be_a()
      # should be_nil
      # should ==
      # should_not ==
    end
  end

  # unit tests for sign_up
  # create a new user
  # 
  # @param app_id ID of app
  # @param body request body
  # @param [Hash] opts the optional parameters
  # @return [CloudUser]
  describe 'sign_up test' do
    it "should work" do
      # assertion here
      # should be_a()
      # should be_nil
      # should ==
      # should_not ==
    end
  end

end