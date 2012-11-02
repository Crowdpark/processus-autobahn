Autobahn
==================

Autobahn is a german word for highway. A highway has multiple driving lines (channels). To get into the highway you have to
to choose a driveway(zeromq/amqp). If you want to drive you need a vehicle (package).

I hope the description is clear :D.

##Requirements

- RabbitMq
- zmq
- php-zmq
- php-amqp

If you want to test both protocol's choose what ever you want.
You can install your **libs** // **c-bindings** via brew or pecl.

##What is this?

This lib support 2 MQ **protocols**.  
1. AMQP     -> RabbitMQ (complex task)  :: External API calls  
2. ZeroMQ   -> Raw (fire and forget)    :: Logging / Tracking  

Both has his benefit's. And actually we using both for different usecases.

##Example Script

To test how your environment works with amqp and zeromq.

##Extending



##License

Copyright (c) 2012 [Francis Varga](http://www.varga-multimedia.com)

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the 'Software'), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.