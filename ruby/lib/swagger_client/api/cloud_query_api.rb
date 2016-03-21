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

require "uri"

module SwaggerClient
  class CloudQueryApi
    attr_accessor :api_client

    def initialize(api_client = ApiClient.default)
      @api_client = api_client
    end

    # count items in a table that match this query criteria
    # count items in a table that match this query criteria
    # @param app_id CloudApp id
    # @param table_name cloud table name
    # @param body query body
    # @param [Hash] opts the optional parameters
    # @return [Integer]
    def count(app_id, table_name, body, opts = {})
      data, status_code, headers = count_with_http_info(app_id, table_name, body, opts)
      return data
    end

    # count items in a table that match this query criteria
    # count items in a table that match this query criteria
    # @param app_id CloudApp id
    # @param table_name cloud table name
    # @param body query body
    # @param [Hash] opts the optional parameters
    # @return [Array<(Integer, Fixnum, Hash)>] Integer data, response status code and response headers
    def count_with_http_info(app_id, table_name, body, opts = {})
      if @api_client.config.debugging
        @api_client.config.logger.debug "Calling API: CloudQueryApi#count ..."
      end
      
      # verify the required parameter 'app_id' is set
      fail "Missing the required parameter 'app_id' when calling count" if app_id.nil?
      
      # verify the required parameter 'table_name' is set
      fail "Missing the required parameter 'table_name' when calling count" if table_name.nil?
      
      # verify the required parameter 'body' is set
      fail "Missing the required parameter 'body' when calling count" if body.nil?
      
      # resource path
      local_var_path = "data/{app_id}/{table_name}/count".sub('{format}','json').sub('{' + 'app_id' + '}', app_id.to_s).sub('{' + 'table_name' + '}', table_name.to_s)

      # query parameters
      query_params = {}

      # header parameters
      header_params = {}

      # HTTP header 'Accept' (if needed)
      _header_accept = ['application/json']
      _header_accept_result = @api_client.select_header_accept(_header_accept) and header_params['Accept'] = _header_accept_result

      # HTTP header 'Content-Type'
      _header_content_type = ['application/json']
      header_params['Content-Type'] = @api_client.select_header_content_type(_header_content_type)

      # form parameters
      form_params = {}

      # http body (model)
      post_body = @api_client.object_to_http_body(body)
      
      auth_names = []
      data, status_code, headers = @api_client.call_api(:POST, local_var_path,
        :header_params => header_params,
        :query_params => query_params,
        :form_params => form_params,
        :body => post_body,
        :auth_names => auth_names,
        :return_type => 'Integer')
      if @api_client.config.debugging
        @api_client.config.logger.debug "API called: CloudQueryApi#count\nData: #{data.inspect}\nStatus code: #{status_code}\nHeaders: #{headers}"
      end
      return data, status_code, headers
    end

    # distinct query criteria
    # 
    # @param app_id CloudApp id
    # @param table_name cloud table name
    # @param body query body
    # @param [Hash] opts the optional parameters
    # @return [Array<CloudObject>]
    def distinct(app_id, table_name, body, opts = {})
      data, status_code, headers = distinct_with_http_info(app_id, table_name, body, opts)
      return data
    end

    # distinct query criteria
    # 
    # @param app_id CloudApp id
    # @param table_name cloud table name
    # @param body query body
    # @param [Hash] opts the optional parameters
    # @return [Array<(Array<CloudObject>, Fixnum, Hash)>] Array<CloudObject> data, response status code and response headers
    def distinct_with_http_info(app_id, table_name, body, opts = {})
      if @api_client.config.debugging
        @api_client.config.logger.debug "Calling API: CloudQueryApi#distinct ..."
      end
      
      # verify the required parameter 'app_id' is set
      fail "Missing the required parameter 'app_id' when calling distinct" if app_id.nil?
      
      # verify the required parameter 'table_name' is set
      fail "Missing the required parameter 'table_name' when calling distinct" if table_name.nil?
      
      # verify the required parameter 'body' is set
      fail "Missing the required parameter 'body' when calling distinct" if body.nil?
      
      # resource path
      local_var_path = "data/{app_id}/{table_name}/distinct".sub('{format}','json').sub('{' + 'app_id' + '}', app_id.to_s).sub('{' + 'table_name' + '}', table_name.to_s)

      # query parameters
      query_params = {}

      # header parameters
      header_params = {}

      # HTTP header 'Accept' (if needed)
      _header_accept = ['application/json']
      _header_accept_result = @api_client.select_header_accept(_header_accept) and header_params['Accept'] = _header_accept_result

      # HTTP header 'Content-Type'
      _header_content_type = ['application/json']
      header_params['Content-Type'] = @api_client.select_header_content_type(_header_content_type)

      # form parameters
      form_params = {}

      # http body (model)
      post_body = @api_client.object_to_http_body(body)
      
      auth_names = []
      data, status_code, headers = @api_client.call_api(:POST, local_var_path,
        :header_params => header_params,
        :query_params => query_params,
        :form_params => form_params,
        :body => post_body,
        :auth_names => auth_names,
        :return_type => 'Array<CloudObject>')
      if @api_client.config.debugging
        @api_client.config.logger.debug "API called: CloudQueryApi#distinct\nData: #{data.inspect}\nStatus code: #{status_code}\nHeaders: #{headers}"
      end
      return data, status_code, headers
    end

    # find CloudObject meeting this query criteria
    # 
    # @param app_id CloudApp id
    # @param table_name cloud table name
    # @param body query object
    # @param [Hash] opts the optional parameters
    # @return [Array<CloudObject>]
    def find(app_id, table_name, body, opts = {})
      data, status_code, headers = find_with_http_info(app_id, table_name, body, opts)
      return data
    end

    # find CloudObject meeting this query criteria
    # 
    # @param app_id CloudApp id
    # @param table_name cloud table name
    # @param body query object
    # @param [Hash] opts the optional parameters
    # @return [Array<(Array<CloudObject>, Fixnum, Hash)>] Array<CloudObject> data, response status code and response headers
    def find_with_http_info(app_id, table_name, body, opts = {})
      if @api_client.config.debugging
        @api_client.config.logger.debug "Calling API: CloudQueryApi#find ..."
      end
      
      # verify the required parameter 'app_id' is set
      fail "Missing the required parameter 'app_id' when calling find" if app_id.nil?
      
      # verify the required parameter 'table_name' is set
      fail "Missing the required parameter 'table_name' when calling find" if table_name.nil?
      
      # verify the required parameter 'body' is set
      fail "Missing the required parameter 'body' when calling find" if body.nil?
      
      # resource path
      local_var_path = "data/{app_id}/{table_name}/find".sub('{format}','json').sub('{' + 'app_id' + '}', app_id.to_s).sub('{' + 'table_name' + '}', table_name.to_s)

      # query parameters
      query_params = {}

      # header parameters
      header_params = {}

      # HTTP header 'Accept' (if needed)
      _header_accept = ['application/json']
      _header_accept_result = @api_client.select_header_accept(_header_accept) and header_params['Accept'] = _header_accept_result

      # HTTP header 'Content-Type'
      _header_content_type = ['application/json']
      header_params['Content-Type'] = @api_client.select_header_content_type(_header_content_type)

      # form parameters
      form_params = {}

      # http body (model)
      post_body = @api_client.object_to_http_body(body)
      
      auth_names = []
      data, status_code, headers = @api_client.call_api(:POST, local_var_path,
        :header_params => header_params,
        :query_params => query_params,
        :form_params => form_params,
        :body => post_body,
        :auth_names => auth_names,
        :return_type => 'Array<CloudObject>')
      if @api_client.config.debugging
        @api_client.config.logger.debug "API called: CloudQueryApi#find\nData: #{data.inspect}\nStatus code: #{status_code}\nHeaders: #{headers}"
      end
      return data, status_code, headers
    end

    # find CloudObject with specific _id
    # 
    # @param cloud_app_id CloudApp id
    # @param table_name cloud table name
    # @param body query body
    # @param [Hash] opts the optional parameters
    # @return [CloudObject]
    def find_by_id(cloud_app_id, table_name, body, opts = {})
      data, status_code, headers = find_by_id_with_http_info(cloud_app_id, table_name, body, opts)
      return data
    end

    # find CloudObject with specific _id
    # 
    # @param cloud_app_id CloudApp id
    # @param table_name cloud table name
    # @param body query body
    # @param [Hash] opts the optional parameters
    # @return [Array<(CloudObject, Fixnum, Hash)>] CloudObject data, response status code and response headers
    def find_by_id_with_http_info(cloud_app_id, table_name, body, opts = {})
      if @api_client.config.debugging
        @api_client.config.logger.debug "Calling API: CloudQueryApi#find_by_id ..."
      end
      
      # verify the required parameter 'cloud_app_id' is set
      fail "Missing the required parameter 'cloud_app_id' when calling find_by_id" if cloud_app_id.nil?
      
      # verify the required parameter 'table_name' is set
      fail "Missing the required parameter 'table_name' when calling find_by_id" if table_name.nil?
      
      # verify the required parameter 'body' is set
      fail "Missing the required parameter 'body' when calling find_by_id" if body.nil?
      
      # resource path
      local_var_path = "data/{cloud_app_id}/{table_name}/find".sub('{format}','json').sub('{' + 'cloud_app_id' + '}', cloud_app_id.to_s).sub('{' + 'table_name' + '}', table_name.to_s)

      # query parameters
      query_params = {}

      # header parameters
      header_params = {}

      # HTTP header 'Accept' (if needed)
      _header_accept = ['application/json']
      _header_accept_result = @api_client.select_header_accept(_header_accept) and header_params['Accept'] = _header_accept_result

      # HTTP header 'Content-Type'
      _header_content_type = ['application/json']
      header_params['Content-Type'] = @api_client.select_header_content_type(_header_content_type)

      # form parameters
      form_params = {}

      # http body (model)
      post_body = @api_client.object_to_http_body(body)
      
      auth_names = []
      data, status_code, headers = @api_client.call_api(:POST, local_var_path,
        :header_params => header_params,
        :query_params => query_params,
        :form_params => form_params,
        :body => post_body,
        :auth_names => auth_names,
        :return_type => 'CloudObject')
      if @api_client.config.debugging
        @api_client.config.logger.debug "API called: CloudQueryApi#find_by_id\nData: #{data.inspect}\nStatus code: #{status_code}\nHeaders: #{headers}"
      end
      return data, status_code, headers
    end

    # find a single CloudObject
    # 
    # @param app_id CloudApp id
    # @param table_name cloud table name
    # @param body query body
    # @param [Hash] opts the optional parameters
    # @return [CloudObject]
    def find_one(app_id, table_name, body, opts = {})
      data, status_code, headers = find_one_with_http_info(app_id, table_name, body, opts)
      return data
    end

    # find a single CloudObject
    # 
    # @param app_id CloudApp id
    # @param table_name cloud table name
    # @param body query body
    # @param [Hash] opts the optional parameters
    # @return [Array<(CloudObject, Fixnum, Hash)>] CloudObject data, response status code and response headers
    def find_one_with_http_info(app_id, table_name, body, opts = {})
      if @api_client.config.debugging
        @api_client.config.logger.debug "Calling API: CloudQueryApi#find_one ..."
      end
      
      # verify the required parameter 'app_id' is set
      fail "Missing the required parameter 'app_id' when calling find_one" if app_id.nil?
      
      # verify the required parameter 'table_name' is set
      fail "Missing the required parameter 'table_name' when calling find_one" if table_name.nil?
      
      # verify the required parameter 'body' is set
      fail "Missing the required parameter 'body' when calling find_one" if body.nil?
      
      # resource path
      local_var_path = "data/{app_id}/{table_name}/findOne".sub('{format}','json').sub('{' + 'app_id' + '}', app_id.to_s).sub('{' + 'table_name' + '}', table_name.to_s)

      # query parameters
      query_params = {}

      # header parameters
      header_params = {}

      # HTTP header 'Accept' (if needed)
      _header_accept = ['application/json']
      _header_accept_result = @api_client.select_header_accept(_header_accept) and header_params['Accept'] = _header_accept_result

      # HTTP header 'Content-Type'
      _header_content_type = ['application/json']
      header_params['Content-Type'] = @api_client.select_header_content_type(_header_content_type)

      # form parameters
      form_params = {}

      # http body (model)
      post_body = @api_client.object_to_http_body(body)
      
      auth_names = []
      data, status_code, headers = @api_client.call_api(:POST, local_var_path,
        :header_params => header_params,
        :query_params => query_params,
        :form_params => form_params,
        :body => post_body,
        :auth_names => auth_names,
        :return_type => 'CloudObject')
      if @api_client.config.debugging
        @api_client.config.logger.debug "API called: CloudQueryApi#find_one\nData: #{data.inspect}\nStatus code: #{status_code}\nHeaders: #{headers}"
      end
      return data, status_code, headers
    end
  end
end