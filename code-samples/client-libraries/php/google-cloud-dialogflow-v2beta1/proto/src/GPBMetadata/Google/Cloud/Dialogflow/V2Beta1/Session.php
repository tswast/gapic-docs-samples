<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/session.proto

namespace GPBMetadata\Google\Cloud\Dialogflow\V2Beta1;

class Session
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\AudioConfig::initOnce();
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\Context::initOnce();
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\Intent::initOnce();
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\SessionEntityType::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Type\Latlng::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a8b290a2d676f6f676c652f636c6f75642f6469616c6f67666c6f772f76" .
            "3262657461312f73657373696f6e2e70726f746f121f676f6f676c652e63" .
            "6c6f75642e6469616c6f67666c6f772e763262657461311a32676f6f676c" .
            "652f636c6f75642f6469616c6f67666c6f772f763262657461312f617564" .
            "696f5f636f6e6669672e70726f746f1a2d676f6f676c652f636c6f75642f" .
            "6469616c6f67666c6f772f763262657461312f636f6e746578742e70726f" .
            "746f1a2c676f6f676c652f636c6f75642f6469616c6f67666c6f772f7632" .
            "62657461312f696e74656e742e70726f746f1a39676f6f676c652f636c6f" .
            "75642f6469616c6f67666c6f772f763262657461312f73657373696f6e5f" .
            "656e746974795f747970652e70726f746f1a1c676f6f676c652f70726f74" .
            "6f6275662f7374727563742e70726f746f1a17676f6f676c652f7270632f" .
            "7374617475732e70726f746f1a18676f6f676c652f747970652f6c61746c" .
            "6e672e70726f746f2296020a13446574656374496e74656e745265717565" .
            "7374120f0a0773657373696f6e18012001280912460a0c71756572795f70" .
            "6172616d7318022001280b32302e676f6f676c652e636c6f75642e646961" .
            "6c6f67666c6f772e763262657461312e5175657279506172616d65746572" .
            "7312400a0b71756572795f696e70757418032001280b322b2e676f6f676c" .
            "652e636c6f75642e6469616c6f67666c6f772e763262657461312e517565" .
            "7279496e707574124f0a136f75747075745f617564696f5f636f6e666967" .
            "18042001280b32322e676f6f676c652e636c6f75642e6469616c6f67666c" .
            "6f772e763262657461312e4f7574707574417564696f436f6e6669671213" .
            "0a0b696e7075745f617564696f18052001280c22d3020a14446574656374" .
            "496e74656e74526573706f6e736512130a0b726573706f6e73655f696418" .
            "012001280912420a0c71756572795f726573756c7418022001280b322c2e" .
            "676f6f676c652e636c6f75642e6469616c6f67666c6f772e763262657461" .
            "312e5175657279526573756c74124f0a19616c7465726e61746976655f71" .
            "756572795f726573756c747318052003280b322c2e676f6f676c652e636c" .
            "6f75642e6469616c6f67666c6f772e763262657461312e51756572795265" .
            "73756c74122a0a0e776562686f6f6b5f73746174757318032001280b3212" .
            "2e676f6f676c652e7270632e53746174757312140a0c6f75747075745f61" .
            "7564696f18042001280c124f0a136f75747075745f617564696f5f636f6e" .
            "66696718062001280b32322e676f6f676c652e636c6f75642e6469616c6f" .
            "67666c6f772e763262657461312e4f7574707574417564696f436f6e6669" .
            "6722a9030a0f5175657279506172616d657465727312110a0974696d655f" .
            "7a6f6e6518012001280912290a0c67656f5f6c6f636174696f6e18022001" .
            "280b32132e676f6f676c652e747970652e4c61744c6e67123a0a08636f6e" .
            "746578747318032003280b32282e676f6f676c652e636c6f75642e646961" .
            "6c6f67666c6f772e763262657461312e436f6e7465787412160a0e726573" .
            "65745f636f6e746578747318042001280812500a1473657373696f6e5f65" .
            "6e746974795f747970657318052003280b32322e676f6f676c652e636c6f" .
            "75642e6469616c6f67666c6f772e763262657461312e53657373696f6e45" .
            "6e746974795479706512280a077061796c6f616418062001280b32172e67" .
            "6f6f676c652e70726f746f6275662e537472756374121c0a146b6e6f776c" .
            "656467655f626173655f6e616d6573180c20032809126a0a2173656e7469" .
            "6d656e745f616e616c797369735f726571756573745f636f6e666967180a" .
            "2001280b323f2e676f6f676c652e636c6f75642e6469616c6f67666c6f77" .
            "2e763262657461312e53656e74696d656e74416e616c7973697352657175" .
            "657374436f6e66696722da010a0a5175657279496e70757412490a0c6175" .
            "64696f5f636f6e66696718012001280b32312e676f6f676c652e636c6f75" .
            "642e6469616c6f67666c6f772e763262657461312e496e70757441756469" .
            "6f436f6e6669674800123a0a047465787418022001280b322a2e676f6f67" .
            "6c652e636c6f75642e6469616c6f67666c6f772e763262657461312e5465" .
            "7874496e7075744800123c0a056576656e7418032001280b322b2e676f6f" .
            "676c652e636c6f75642e6469616c6f67666c6f772e763262657461312e45" .
            "76656e74496e707574480042070a05696e70757422f2050a0b5175657279" .
            "526573756c7412120a0a71756572795f7465787418012001280912150a0d" .
            "6c616e67756167655f636f6465180f2001280912250a1d7370656563685f" .
            "7265636f676e6974696f6e5f636f6e666964656e6365180220012802120e" .
            "0a06616374696f6e180320012809122b0a0a706172616d65746572731804" .
            "2001280b32172e676f6f676c652e70726f746f6275662e53747275637412" .
            "230a1b616c6c5f72657175697265645f706172616d735f70726573656e74" .
            "18052001280812180a1066756c66696c6c6d656e745f7465787418062001" .
            "2809124d0a1466756c66696c6c6d656e745f6d6573736167657318072003" .
            "280b322f2e676f6f676c652e636c6f75642e6469616c6f67666c6f772e76" .
            "3262657461312e496e74656e742e4d65737361676512160a0e776562686f" .
            "6f6b5f736f7572636518082001280912300a0f776562686f6f6b5f706179" .
            "6c6f616418092001280b32172e676f6f676c652e70726f746f6275662e53" .
            "747275637412410a0f6f75747075745f636f6e7465787473180a2003280b" .
            "32282e676f6f676c652e636c6f75642e6469616c6f67666c6f772e763262" .
            "657461312e436f6e7465787412370a06696e74656e74180b2001280b3227" .
            "2e676f6f676c652e636c6f75642e6469616c6f67666c6f772e7632626574" .
            "61312e496e74656e7412230a1b696e74656e745f646574656374696f6e5f" .
            "636f6e666964656e6365180c2001280212300a0f646961676e6f73746963" .
            "5f696e666f180e2001280b32172e676f6f676c652e70726f746f6275662e" .
            "537472756374125b0a1973656e74696d656e745f616e616c797369735f72" .
            "6573756c7418112001280b32382e676f6f676c652e636c6f75642e646961" .
            "6c6f67666c6f772e763262657461312e53656e74696d656e74416e616c79" .
            "736973526573756c74124c0a116b6e6f776c656467655f616e7377657273" .
            "18122001280b32312e676f6f676c652e636c6f75642e6469616c6f67666c" .
            "6f772e763262657461312e4b6e6f776c65646765416e7377657273228603" .
            "0a104b6e6f776c65646765416e737765727312490a07616e737765727318" .
            "012003280b32382e676f6f676c652e636c6f75642e6469616c6f67666c6f" .
            "772e763262657461312e4b6e6f776c65646765416e73776572732e416e73" .
            "7765721aa6020a06416e73776572120e0a06736f75726365180120012809" .
            "12140a0c6661715f7175657374696f6e180220012809120e0a06616e7377" .
            "6572180320012809126d0a166d617463685f636f6e666964656e63655f6c" .
            "6576656c18042001280e324d2e676f6f676c652e636c6f75642e6469616c" .
            "6f67666c6f772e763262657461312e4b6e6f776c65646765416e73776572" .
            "732e416e737765722e4d61746368436f6e666964656e63654c6576656c12" .
            "180a106d617463685f636f6e666964656e6365180520012802225d0a144d" .
            "61746368436f6e666964656e63654c6576656c12260a224d415443485f43" .
            "4f4e464944454e43455f4c4556454c5f554e535045434946494544100012" .
            "070a034c4f571001120a0a064d454449554d100212080a04484947481003" .
            "22b9020a1c53747265616d696e67446574656374496e74656e7452657175" .
            "657374120f0a0773657373696f6e18012001280912460a0c71756572795f" .
            "706172616d7318022001280b32302e676f6f676c652e636c6f75642e6469" .
            "616c6f67666c6f772e763262657461312e5175657279506172616d657465" .
            "727312400a0b71756572795f696e70757418032001280b322b2e676f6f67" .
            "6c652e636c6f75642e6469616c6f67666c6f772e763262657461312e5175" .
            "657279496e70757412180a1073696e676c655f7574746572616e63651804" .
            "20012808124f0a136f75747075745f617564696f5f636f6e666967180520" .
            "01280b32322e676f6f676c652e636c6f75642e6469616c6f67666c6f772e" .
            "763262657461312e4f7574707574417564696f436f6e66696712130a0b69" .
            "6e7075745f617564696f18062001280c22b5030a1d53747265616d696e67" .
            "446574656374496e74656e74526573706f6e736512130a0b726573706f6e" .
            "73655f696418012001280912570a127265636f676e6974696f6e5f726573" .
            "756c7418022001280b323b2e676f6f676c652e636c6f75642e6469616c6f" .
            "67666c6f772e763262657461312e53747265616d696e675265636f676e69" .
            "74696f6e526573756c7412420a0c71756572795f726573756c7418032001" .
            "280b322c2e676f6f676c652e636c6f75642e6469616c6f67666c6f772e76" .
            "3262657461312e5175657279526573756c74124f0a19616c7465726e6174" .
            "6976655f71756572795f726573756c747318072003280b322c2e676f6f67" .
            "6c652e636c6f75642e6469616c6f67666c6f772e763262657461312e5175" .
            "657279526573756c74122a0a0e776562686f6f6b5f737461747573180420" .
            "01280b32122e676f6f676c652e7270632e53746174757312140a0c6f7574" .
            "7075745f617564696f18052001280c124f0a136f75747075745f61756469" .
            "6f5f636f6e66696718062001280b32322e676f6f676c652e636c6f75642e" .
            "6469616c6f67666c6f772e763262657461312e4f7574707574417564696f" .
            "436f6e666967228f020a1a53747265616d696e675265636f676e6974696f" .
            "6e526573756c74125d0a0c6d6573736167655f7479706518012001280e32" .
            "472e676f6f676c652e636c6f75642e6469616c6f67666c6f772e76326265" .
            "7461312e53747265616d696e675265636f676e6974696f6e526573756c74" .
            "2e4d6573736167655479706512120a0a7472616e73637269707418022001" .
            "280912100a0869735f66696e616c18032001280812120a0a636f6e666964" .
            "656e636518042001280222580a0b4d65737361676554797065121c0a184d" .
            "4553534147455f545950455f554e5350454349464945441000120e0a0a54" .
            "52414e5343524950541001121b0a17454e445f4f465f53494e474c455f55" .
            "54544552414e4345100222b1010a10496e707574417564696f436f6e6669" .
            "6712460a0e617564696f5f656e636f64696e6718012001280e322e2e676f" .
            "6f676c652e636c6f75642e6469616c6f67666c6f772e763262657461312e" .
            "417564696f456e636f64696e6712190a1173616d706c655f726174655f68" .
            "6572747a18022001280512150a0d6c616e67756167655f636f6465180320" .
            "01280912140a0c7068726173655f68696e7473180420032809120d0a056d" .
            "6f64656c18072001280922300a0954657874496e707574120c0a04746578" .
            "7418012001280912150a0d6c616e67756167655f636f6465180220012809" .
            "225e0a0a4576656e74496e707574120c0a046e616d65180120012809122b" .
            "0a0a706172616d657465727318022001280b32172e676f6f676c652e7072" .
            "6f746f6275662e53747275637412150a0d6c616e67756167655f636f6465" .
            "18032001280922460a1e53656e74696d656e74416e616c79736973526571" .
            "75657374436f6e66696712240a1c616e616c797a655f71756572795f7465" .
            "78745f73656e74696d656e7418012001280822630a1753656e74696d656e" .
            "74416e616c79736973526573756c7412480a1471756572795f746578745f" .
            "73656e74696d656e7418012001280b322a2e676f6f676c652e636c6f7564" .
            "2e6469616c6f67666c6f772e763262657461312e53656e74696d656e7422" .
            "2d0a0953656e74696d656e74120d0a0573636f726518012001280212110a" .
            "096d61676e69747564651802200128022afb010a0d417564696f456e636f" .
            "64696e67121e0a1a415544494f5f454e434f44494e475f554e5350454349" .
            "464945441000121c0a18415544494f5f454e434f44494e475f4c494e4541" .
            "525f3136100112170a13415544494f5f454e434f44494e475f464c414310" .
            "0212180a14415544494f5f454e434f44494e475f4d554c4157100312160a" .
            "12415544494f5f454e434f44494e475f414d52100412190a15415544494f" .
            "5f454e434f44494e475f414d525f57421005121b0a17415544494f5f454e" .
            "434f44494e475f4f47475f4f505553100612290a25415544494f5f454e43" .
            "4f44494e475f53504545585f574954485f4845414445525f425954451007" .
            "32ca030a0853657373696f6e73129e020a0c446574656374496e74656e74" .
            "12342e676f6f676c652e636c6f75642e6469616c6f67666c6f772e763262" .
            "657461312e446574656374496e74656e74526571756573741a352e676f6f" .
            "676c652e636c6f75642e6469616c6f67666c6f772e763262657461312e44" .
            "6574656374496e74656e74526573706f6e736522a00182d3e49302990122" .
            "3b2f763262657461312f7b73657373696f6e3d70726f6a656374732f2a2f" .
            "6167656e742f73657373696f6e732f2a7d3a646574656374496e74656e74" .
            "3a012a5a5722522f763262657461312f7b73657373696f6e3d70726f6a65" .
            "6374732f2a2f6167656e742f656e7669726f6e6d656e74732f2a2f757365" .
            "72732f2a2f73657373696f6e732f2a7d3a646574656374496e74656e743a" .
            "012a129c010a1553747265616d696e67446574656374496e74656e74123d" .
            "2e676f6f676c652e636c6f75642e6469616c6f67666c6f772e7632626574" .
            "61312e53747265616d696e67446574656374496e74656e74526571756573" .
            "741a3e2e676f6f676c652e636c6f75642e6469616c6f67666c6f772e7632" .
            "62657461312e53747265616d696e67446574656374496e74656e74526573" .
            "706f6e736522002801300142aa010a23636f6d2e676f6f676c652e636c6f" .
            "75642e6469616c6f67666c6f772e76326265746131420c53657373696f6e" .
            "50726f746f50015a49676f6f676c652e676f6c616e672e6f72672f67656e" .
            "70726f746f2f676f6f676c65617069732f636c6f75642f6469616c6f6766" .
            "6c6f772f763262657461313b6469616c6f67666c6f77f80101a202024446" .
            "aa021f476f6f676c652e436c6f75642e4469616c6f67666c6f772e563262" .
            "65746131620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
