package io.cloudboost.model;

import java.util.Objects;
import com.fasterxml.jackson.annotation.JsonProperty;
import io.cloudboost.model.CloudQuery;
import io.cloudboost.model.Query;
import io.swagger.annotations.ApiModel;
import io.swagger.annotations.ApiModelProperty;





@javax.annotation.Generated(value = "class io.swagger.codegen.languages.JavaClientCodegen", date = "2016-03-21T16:08:35.479Z")
public class CloudQueryFindOne extends CloudQuery  {
  
  private String key = null;
  private Integer skip = null;
  private Integer limit = null;
  private Query query = null;
  private Object sort = null;
  private Object select = null;

  
  /**
   **/
  public CloudQueryFindOne key(String key) {
    this.key = key;
    return this;
  }
  
  @ApiModelProperty(example = "null", value = "")
  @JsonProperty("key")
  public String getKey() {
    return key;
  }
  public void setKey(String key) {
    this.key = key;
  }

  
  /**
   **/
  public CloudQueryFindOne skip(Integer skip) {
    this.skip = skip;
    return this;
  }
  
  @ApiModelProperty(example = "null", value = "")
  @JsonProperty("skip")
  public Integer getSkip() {
    return skip;
  }
  public void setSkip(Integer skip) {
    this.skip = skip;
  }

  
  /**
   **/
  public CloudQueryFindOne limit(Integer limit) {
    this.limit = limit;
    return this;
  }
  
  @ApiModelProperty(example = "null", value = "")
  @JsonProperty("limit")
  public Integer getLimit() {
    return limit;
  }
  public void setLimit(Integer limit) {
    this.limit = limit;
  }

  
  /**
   **/
  public CloudQueryFindOne query(Query query) {
    this.query = query;
    return this;
  }
  
  @ApiModelProperty(example = "null", value = "")
  @JsonProperty("query")
  public Query getQuery() {
    return query;
  }
  public void setQuery(Query query) {
    this.query = query;
  }

  
  /**
   **/
  public CloudQueryFindOne sort(Object sort) {
    this.sort = sort;
    return this;
  }
  
  @ApiModelProperty(example = "null", value = "")
  @JsonProperty("sort")
  public Object getSort() {
    return sort;
  }
  public void setSort(Object sort) {
    this.sort = sort;
  }

  
  /**
   **/
  public CloudQueryFindOne select(Object select) {
    this.select = select;
    return this;
  }
  
  @ApiModelProperty(example = "null", value = "")
  @JsonProperty("select")
  public Object getSelect() {
    return select;
  }
  public void setSelect(Object select) {
    this.select = select;
  }

  

  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    CloudQueryFindOne cloudQueryFindOne = (CloudQueryFindOne) o;
    return Objects.equals(this.key, cloudQueryFindOne.key) &&
        Objects.equals(this.skip, cloudQueryFindOne.skip) &&
        Objects.equals(this.limit, cloudQueryFindOne.limit) &&
        Objects.equals(this.query, cloudQueryFindOne.query) &&
        Objects.equals(this.sort, cloudQueryFindOne.sort) &&
        Objects.equals(this.select, cloudQueryFindOne.select) &&
        super.equals(o);
  }

  @Override
  public int hashCode() {
    return Objects.hash(key, skip, limit, query, sort, select, super.hashCode());
  }

  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class CloudQueryFindOne {\n");
    sb.append("    ").append(toIndentedString(super.toString())).append("\n");
    sb.append("    key: ").append(toIndentedString(key)).append("\n");
    sb.append("    skip: ").append(toIndentedString(skip)).append("\n");
    sb.append("    limit: ").append(toIndentedString(limit)).append("\n");
    sb.append("    query: ").append(toIndentedString(query)).append("\n");
    sb.append("    sort: ").append(toIndentedString(sort)).append("\n");
    sb.append("    select: ").append(toIndentedString(select)).append("\n");
    sb.append("}");
    return sb.toString();
  }

  /**
   * Convert the given object to string with each line indented by 4 spaces
   * (except the first line).
   */
  private String toIndentedString(java.lang.Object o) {
    if (o == null) {
      return "null";
    }
    return o.toString().replace("\n", "\n    ");
  }
}

