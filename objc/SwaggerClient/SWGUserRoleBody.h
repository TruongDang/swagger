#import <Foundation/Foundation.h>
#import "SWGObject.h"

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

#import "SWGCloudRole.h"
#import "SWGCloudUser.h"


@protocol SWGUserRoleBody
@end

@interface SWGUserRoleBody : SWGObject


@property(nonatomic) NSString* key;

@property(nonatomic) SWGCloudRole* role;

@property(nonatomic) SWGCloudUser* user;

@end
