# Generated by the gRPC Python protocol compiler plugin. DO NOT EDIT!
import grpc

from google.cloud.talent_v4beta1.proto import event_pb2 as google_dot_cloud_dot_talent__v4beta1_dot_proto_dot_event__pb2
from google.cloud.talent_v4beta1.proto import event_service_pb2 as google_dot_cloud_dot_talent__v4beta1_dot_proto_dot_event__service__pb2


class EventServiceStub(object):
  """A service handles client event report.
  """

  def __init__(self, channel):
    """Constructor.

    Args:
      channel: A grpc.Channel.
    """
    self.CreateClientEvent = channel.unary_unary(
        '/google.cloud.talent.v4beta1.EventService/CreateClientEvent',
        request_serializer=google_dot_cloud_dot_talent__v4beta1_dot_proto_dot_event__service__pb2.CreateClientEventRequest.SerializeToString,
        response_deserializer=google_dot_cloud_dot_talent__v4beta1_dot_proto_dot_event__pb2.ClientEvent.FromString,
        )


class EventServiceServicer(object):
  """A service handles client event report.
  """

  def CreateClientEvent(self, request, context):
    """Report events issued when end user interacts with customer's application
    that uses Cloud Talent Solution. You may inspect the created events in
    [self service
    tools](https://console.cloud.google.com/talent-solution/overview).
    [Learn
    more](https://cloud.google.com/talent-solution/job-search/docs/management-tools)
    about self service tools.
    """
    context.set_code(grpc.StatusCode.UNIMPLEMENTED)
    context.set_details('Method not implemented!')
    raise NotImplementedError('Method not implemented!')


def add_EventServiceServicer_to_server(servicer, server):
  rpc_method_handlers = {
      'CreateClientEvent': grpc.unary_unary_rpc_method_handler(
          servicer.CreateClientEvent,
          request_deserializer=google_dot_cloud_dot_talent__v4beta1_dot_proto_dot_event__service__pb2.CreateClientEventRequest.FromString,
          response_serializer=google_dot_cloud_dot_talent__v4beta1_dot_proto_dot_event__pb2.ClientEvent.SerializeToString,
      ),
  }
  generic_handler = grpc.method_handlers_generic_handler(
      'google.cloud.talent.v4beta1.EventService', rpc_method_handlers)
  server.add_generic_rpc_handlers((generic_handler,))
