#import <Foundation/Foundation.h>
#import "SWGObject.h"

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

#import "SWGACL.h"


@protocol SWGQueueMessage
@end

@interface SWGQueueMessage : SWGObject


@property(nonatomic) SWGACL* aCL;

@property(nonatomic) NSString* type;

@property(nonatomic) NSDate* expires;

@property(nonatomic) NSString* _id;

@property(nonatomic) NSDate* delay;

@property(nonatomic) NSNumber* timeout;

@property(nonatomic) NSArray* /* NSString */ modifiedColumns;

@property(nonatomic) NSNumber* isModified;

@property(nonatomic) NSString* message;

@end