<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/knowledge_base.proto

namespace GPBMetadata\Google\Cloud\Dialogflow\V2Beta1;

class KnowledgeBase
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a920e0a34676f6f676c652f636c6f75642f6469616c6f67666c6f772f76" .
            "3262657461312f6b6e6f776c656467655f626173652e70726f746f121f67" .
            "6f6f676c652e636c6f75642e6469616c6f67666c6f772e76326265746131" .
            "1a1b676f6f676c652f70726f746f6275662f656d7074792e70726f746f1a" .
            "20676f6f676c652f70726f746f6275662f6669656c645f6d61736b2e7072" .
            "6f746f22330a0d4b6e6f776c6564676542617365120c0a046e616d651801" .
            "2001280912140a0c646973706c61795f6e616d6518022001280922520a19" .
            "4c6973744b6e6f776c65646765426173657352657175657374120e0a0670" .
            "6172656e7418012001280912110a09706167655f73697a65180220012805" .
            "12120a0a706167655f746f6b656e180320012809227e0a1a4c6973744b6e" .
            "6f776c656467654261736573526573706f6e736512470a0f6b6e6f776c65" .
            "6467655f626173657318012003280b322e2e676f6f676c652e636c6f7564" .
            "2e6469616c6f67666c6f772e763262657461312e4b6e6f776c6564676542" .
            "61736512170a0f6e6578745f706167655f746f6b656e1802200128092227" .
            "0a174765744b6e6f776c656467654261736552657175657374120c0a046e" .
            "616d6518012001280922740a1a4372656174654b6e6f776c656467654261" .
            "736552657175657374120e0a06706172656e7418012001280912460a0e6b" .
            "6e6f776c656467655f6261736518022001280b322e2e676f6f676c652e63" .
            "6c6f75642e6469616c6f67666c6f772e763262657461312e4b6e6f776c65" .
            "6467654261736522390a1a44656c6574654b6e6f776c6564676542617365" .
            "52657175657374120c0a046e616d65180120012809120d0a05666f726365" .
            "18022001280832db070a0e4b6e6f776c65646765426173657312f7010a12" .
            "4c6973744b6e6f776c656467654261736573123a2e676f6f676c652e636c" .
            "6f75642e6469616c6f67666c6f772e763262657461312e4c6973744b6e6f" .
            "776c656467654261736573526571756573741a3b2e676f6f676c652e636c" .
            "6f75642e6469616c6f67666c6f772e763262657461312e4c6973744b6e6f" .
            "776c656467654261736573526573706f6e7365226882d3e4930262122b2f" .
            "763262657461312f7b706172656e743d70726f6a656374732f2a7d2f6b6e" .
            "6f776c6564676542617365735a3312312f763262657461312f7b70617265" .
            "6e743d70726f6a656374732f2a2f6167656e747d2f6b6e6f776c65646765" .
            "426173657312e6010a104765744b6e6f776c656467654261736512382e67" .
            "6f6f676c652e636c6f75642e6469616c6f67666c6f772e76326265746131" .
            "2e4765744b6e6f776c6564676542617365526571756573741a2e2e676f6f" .
            "676c652e636c6f75642e6469616c6f67666c6f772e763262657461312e4b" .
            "6e6f776c6564676542617365226882d3e4930262122b2f76326265746131" .
            "2f7b6e616d653d70726f6a656374732f2a2f6b6e6f776c65646765426173" .
            "65732f2a7d5a3312312f763262657461312f7b6e616d653d70726f6a6563" .
            "74732f2a2f6167656e742f6b6e6f776c6564676542617365732f2a7d128e" .
            "020a134372656174654b6e6f776c6564676542617365123b2e676f6f676c" .
            "652e636c6f75642e6469616c6f67666c6f772e763262657461312e437265" .
            "6174654b6e6f776c6564676542617365526571756573741a2e2e676f6f67" .
            "6c652e636c6f75642e6469616c6f67666c6f772e763262657461312e4b6e" .
            "6f776c656467654261736522890182d3e493028201222b2f763262657461" .
            "312f7b706172656e743d70726f6a656374732f2a7d2f6b6e6f776c656467" .
            "6542617365733a0e6b6e6f776c656467655f626173655a4322312f763262" .
            "657461312f7b706172656e743d70726f6a656374732f2a2f6167656e747d" .
            "2f6b6e6f776c6564676542617365733a0e6b6e6f776c656467655f626173" .
            "6512d4010a1344656c6574654b6e6f776c6564676542617365123b2e676f" .
            "6f676c652e636c6f75642e6469616c6f67666c6f772e763262657461312e" .
            "44656c6574654b6e6f776c6564676542617365526571756573741a162e67" .
            "6f6f676c652e70726f746f6275662e456d707479226882d3e49302622a2b" .
            "2f763262657461312f7b6e616d653d70726f6a656374732f2a2f6b6e6f77" .
            "6c6564676542617365732f2a7d5a332a312f763262657461312f7b6e616d" .
            "653d70726f6a656374732f2a2f6167656e742f6b6e6f776c656467654261" .
            "7365732f2a7d42b0010a23636f6d2e676f6f676c652e636c6f75642e6469" .
            "616c6f67666c6f772e7632626574613142124b6e6f776c65646765426173" .
            "6550726f746f50015a49676f6f676c652e676f6c616e672e6f72672f6765" .
            "6e70726f746f2f676f6f676c65617069732f636c6f75642f6469616c6f67" .
            "666c6f772f763262657461313b6469616c6f67666c6f77f80101a2020244" .
            "46aa021f476f6f676c652e436c6f75642e4469616c6f67666c6f772e5632" .
            "6265746131620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

