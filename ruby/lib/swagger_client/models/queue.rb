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

require 'date'

module SwaggerClient
  class Queue
    attr_accessor :_id

    attr_accessor :_table_name

    attr_accessor :created_at

    attr_accessor :updated_at

    attr_accessor :acl

    attr_accessor :_type

    attr_accessor :expires

    attr_accessor :queue_type

    attr_accessor :_retry

    attr_accessor :name

    attr_accessor :subscribers

    attr_accessor :messages

    # Attribute mapping from ruby-style variable name to JSON key.
    def self.attribute_map
      {
        
        :'_id' => :'_id',
        
        :'_table_name' => :'_tableName',
        
        :'created_at' => :'createdAt',
        
        :'updated_at' => :'updatedAt',
        
        :'acl' => :'ACL',
        
        :'_type' => :'_type',
        
        :'expires' => :'expires',
        
        :'queue_type' => :'queueType',
        
        :'_retry' => :'retry',
        
        :'name' => :'name',
        
        :'subscribers' => :'subscribers',
        
        :'messages' => :'messages'
        
      }
    end

    # Attribute type mapping.
    def self.swagger_types
      {
        :'_id' => :'String',
        :'_table_name' => :'String',
        :'created_at' => :'DateTime',
        :'updated_at' => :'DateTime',
        :'acl' => :'ACL',
        :'_type' => :'String',
        :'expires' => :'DateTime',
        :'queue_type' => :'String',
        :'_retry' => :'String',
        :'name' => :'String',
        :'subscribers' => :'Array<String>',
        :'messages' => :'Array<QueueMessage>'
        
      }
    end

    def initialize(attributes = {})
      return unless attributes.is_a?(Hash)

      # convert string to symbol for hash key
      attributes = attributes.inject({}){|memo,(k,v)| memo[k.to_sym] = v; memo}

      
      if attributes[:'_id']
        self._id = attributes[:'_id']
      end
      
      if attributes[:'_tableName']
        self._table_name = attributes[:'_tableName']
      else
        self._table_name = "_Queue"
      end
      
      if attributes[:'createdAt']
        self.created_at = attributes[:'createdAt']
      end
      
      if attributes[:'updatedAt']
        self.updated_at = attributes[:'updatedAt']
      end
      
      if attributes[:'ACL']
        self.acl = attributes[:'ACL']
      end
      
      if attributes[:'_type']
        self._type = attributes[:'_type']
      else
        self._type = "queue"
      end
      
      if attributes[:'expires']
        self.expires = attributes[:'expires']
      end
      
      if attributes[:'queueType']
        self.queue_type = attributes[:'queueType']
      else
        self.queue_type = "pull"
      end
      
      if attributes[:'retry']
        self._retry = attributes[:'retry']
      end
      
      if attributes[:'name']
        self.name = attributes[:'name']
      end
      
      if attributes[:'subscribers']
        if (value = attributes[:'subscribers']).is_a?(Array)
          self.subscribers = value
        end
      end
      
      if attributes[:'messages']
        if (value = attributes[:'messages']).is_a?(Array)
          self.messages = value
        end
      end
      
    end

    # Check equality by comparing each attribute.
    def ==(o)
      return true if self.equal?(o)
      self.class == o.class &&
          _id == o._id &&
          _table_name == o._table_name &&
          created_at == o.created_at &&
          updated_at == o.updated_at &&
          acl == o.acl &&
          _type == o._type &&
          expires == o.expires &&
          queue_type == o.queue_type &&
          _retry == o._retry &&
          name == o.name &&
          subscribers == o.subscribers &&
          messages == o.messages
    end

    # @see the `==` method
    def eql?(o)
      self == o
    end

    # Calculate hash code according to all attributes.
    def hash
      [_id, _table_name, created_at, updated_at, acl, _type, expires, queue_type, _retry, name, subscribers, messages].hash
    end

    # build the object from hash
    def build_from_hash(attributes)
      return nil unless attributes.is_a?(Hash)
      self.class.swagger_types.each_pair do |key, type|
        if type =~ /^Array<(.*)>/i
          if attributes[self.class.attribute_map[key]].is_a?(Array)
            self.send("#{key}=", attributes[self.class.attribute_map[key]].map{ |v| _deserialize($1, v) } )
          else
            #TODO show warning in debug mode
          end
        elsif !attributes[self.class.attribute_map[key]].nil?
          self.send("#{key}=", _deserialize(type, attributes[self.class.attribute_map[key]]))
        else
          # data not found in attributes(hash), not an issue as the data can be optional
        end
      end

      self
    end

    def _deserialize(type, value)
      case type.to_sym
      when :DateTime
        DateTime.parse(value)
      when :Date
        Date.parse(value)
      when :String
        value.to_s
      when :Integer
        value.to_i
      when :Float
        value.to_f
      when :BOOLEAN
        if value.to_s =~ /^(true|t|yes|y|1)$/i
          true
        else
          false
        end
      when :Object
        # generic object (usually a Hash), return directly
        value
      when /\AArray<(?<inner_type>.+)>\z/
        inner_type = Regexp.last_match[:inner_type]
        value.map { |v| _deserialize(inner_type, v) }
      when /\AHash<(?<k_type>.+), (?<v_type>.+)>\z/
        k_type = Regexp.last_match[:k_type]
        v_type = Regexp.last_match[:v_type]
        {}.tap do |hash|
          value.each do |k, v|
            hash[_deserialize(k_type, k)] = _deserialize(v_type, v)
          end
        end
      else # model
        _model = SwaggerClient.const_get(type).new
        _model.build_from_hash(value)
      end
    end

    def to_s
      to_hash.to_s
    end

    # to_body is an alias to to_body (backward compatibility))
    def to_body
      to_hash
    end

    # return the object in the form of hash
    def to_hash
      hash = {}
      self.class.attribute_map.each_pair do |attr, param|
        value = self.send(attr)
        next if value.nil?
        hash[param] = _to_hash(value)
      end
      hash
    end

    # Method to output non-array value in the form of hash
    # For object, use to_hash. Otherwise, just return the value
    def _to_hash(value)
      if value.is_a?(Array)
        value.compact.map{ |v| _to_hash(v) }
      elsif value.is_a?(Hash)
        {}.tap do |hash|
          value.each { |k, v| hash[k] = _to_hash(v) }
        end
      elsif value.respond_to? :to_hash
        value.to_hash
      else
        value
      end
    end

  end
end