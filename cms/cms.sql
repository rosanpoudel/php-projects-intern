-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2018 at 04:51 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `configuration`
--

DROP TABLE IF EXISTS `configuration`;
CREATE TABLE IF NOT EXISTS `configuration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` blob NOT NULL,
  `siteName` text NOT NULL,
  `siteURL` text NOT NULL,
  `sitePath` text NOT NULL,
  `footerText` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `configuration`
--

INSERT INTO `configuration` (`id`, `logo`, `siteName`, `siteURL`, `sitePath`, `footerText`) VALUES
(1, 0xffd8ffe000104a46494600010100000100010000ffdb008400090607100f100e0f0f0e15121510151615101118101515101612171516161a1517151b1d2822191a251d151622322225292b2e2e2e181f3338332d372e2d2e2d010a0a0a0e0d0e1b10101b2d251f26312d2b2b2b2d2b2b2d2d2d362f2d2d2d2d2d2d2d2d2d2d2f2d2d2d2d2d2d2d2d2d2d2d2d2d312d2d2d2d2d2d2d2d2d2d2b2fffc000110800e100e103011100021101031101ffc4001c0001000203010101000000000000000000000207010506040308ffc400501000020102010705070f080a03000000000001020304110506122131415107136171812232527291a1b11416172335425562739394b2b3c1e33453546374828392253343a2c2d1d2d3e1f0152444ffc4001a010100020301000000000000000000000000010502030406ffc40034110100010202040c0603010100000000000001020304110512318113142132334161a1b1c1d1e15152627191f0152242f123ffda000c03010002110311003f00bc4000000000000061b034594f3becadf14eb73925ef29ad37d58f7a9f5b3b2d606f5ceaca3b793ddc7771f62df2679cf672fb399bee51aa3c550b68c784a72727fcb1c30f2b3bade8ba7fdd5f8705cd2d54f329fcfa7bb47759e17f53ff00a34170842315e5c31f39d54e06c53fe7f2e4af1f88abfd65f6c9adab956e67df5cd6975d69b5e4c4df166dc6ca63f10e79bd7276d53f9979a5524f6c9beb6d99c4446c613333b588cdad8daea7813911330f452ca5710ef6e2ac7aab4d7a1984daa276d31f8867176e46caa7f32d8db676dfd3d973292e12519f9dac7ce68ab0562aff003f8e46fa71d88a7fd7e726eecb945ad1c156b784d718b707e478a7e6396bd1744f32a98eff004755bd2b7239f4c4fdb93d5d264dcf6b2ad829547464f7545a2bf9d631f2b38ae68fbd46c8cfede9b5dd6b48d8af6ce5f7f5d8e8a135249c5a69ec69e29f69c53131c92ee8989e5848848000000000000000000000000c49a49b6f04b6bdd801c8e5ccfca147185bae7e7e1638514fc6f7dd9aba4b2b1a36baf96e72477fb2b2fe93b74725bfed3ddeee0f2b65fbabb6f9eacdc7f371ee69ff002adbdb896f670d6ed73637f5a9ef626edee7ceeeafdfbb586e6864000000000000000f6e4ccad716af1a15a50e31c7183eb83d5dbb4d776cdbbb195719b6dabd72d4e744e5e1f877390f940a73c21770e6dfe7238ba6fad6d8f9fb0a9bfa32a8e5b739f675adec694a6792ec65db1b3d9da51ab19c54e12528c96319269c5ae29ada55d54cd3394ed5ad3545519c4f2264240000000000000000000d6e5ccb942ca1a75a5adf794d6b9c9f42e1d2f51bec61ebbd3953f9ea68bf89b7629cea9fb475caafce0ce7b8bd6d49e853dd462fb9fde7ef9f9ba0bec3e12dd9d9cb3f1fdd8f3f88c65cbfc93c91f0f5f8b487539000000000000000000000003679132f5c594b1a33ee5beea93d74e5d9b9f4a345fc3dbbd19551bfadd1631372cce74cf27c3a96866ee72d0bd8e117a1512c6749bee974c5fbe8f4f9702871384aec4f2f2c7c57f86c6517e393927e1fbb5ba395d60000000000000001cee75e7453b28e84709d692ee61ba2bc29f4746d7e73b70983aaf4e73c94feec70e331b4d88ca396af87aaabbdbca95ea4aad69b9ca5b5bf425b97423d051453453ab4c650f3d5d755756b5539cbe064c0000000000000000000000000009d1ab284a33849c65178c649e124f8a644c44c653b131334ce71b566e68677ab9d1a170d46b7bd96c8d4eae12e8dfbb82a2c66066dff007a39be1ecbfc163e2eff004af9de3eeeb4ae590000000000001cee77e72c6ca1a30c255aa2ee23ba2b669cba382defb4edc1e126f559cf363f7270e37191629ca39d3b3d553d7ad2a9294e7272949e329378b6f89e869a6298ca363ced554d539ced409620000000000000000000000000000004da69a7835ad35a9a7c530959d9939d5ea94adebcbdba2bb897e722bfc4b7f1dbc4a2c760f83fef4737c3d97d81c6f09ff9d7cef1f775e56acc0000000035b9c19621654255a7adeca70c75ca6f62eadedf04cdf87b137abd58ded189bf4d8b7354ee8f8a9bbebca95ea4eb559694e6f193fb9704b6247a6a28a68a629a7643cbd75d55d53555b65f032600000000000000000000000000000000004a954942519c64e328b4e324f069ad69a2262263294c4cc4e70b7b3472fabda38cb05569e0aac7d135d0fccf1479cc661a6cd7c9b2767a3d2e0f1517e8e5e746df56f4e476000001894924db7825b5eec00a7b3b72e3bdb8724fdae9e31a2ba37cfae5879123d2e130fc0dbcbae76fef63cc63311c3dcce3646cf5ded21d4e40000000000000000000000000000000000000f7e42cab3b3af0af0d786a9c7c283db1fbd74a46abf662f51344b758bd366e4571fb0ba6d6e215610ab4e5a519a528be29eb3cbd744d154d33b61eaa8ae2ba62aa764bea62c8000721ca3658e6682b783eeee31d2e2a92dbe5d9d5a45968db1af5ebcec8f1f656693bfa96f838db3e1eeac4bd50000000000000000000fb595a4ebd4a7469c74a751e115e76df4249b7d09985cb94dba66aab64365bb755caa29a76cb1776d3a35274aa4746506d4974ff0096fc7a49a2b8ae98aa9d928ae89a2a9a6adb0f91930000000000000000001df7267963bfb39bd98ce8ff008e3fe2ed9151a4ec6cbb1f69f2f4fc2e745dfdb6a7ef1e7ebf977e53ae4030d814ae72653777755ab63dcb7a34fe4e3aa3e5dbfbccf5186b3c15b8a7f3f7794c4dee1aecd7d5d5f6fde56b4ded000000000000000010ab5541694bfcdb7c12dec8aaa8a6339654d3354e50b4f30736ddad3f54578e15eb2ef7f354deb54fc67a9c9f1c16e4cf3b8cc54deab28d90f4983c2c59a7976ced33ef36fd530f54518fb6d35ad2db520b778cb776ae186dc062b83ab52ae6cf73563f09c2d3af4f3a3bff007a95717cf3cc800000000000000003ef93ef2542ad3ad0efa9c94974e1b575358aed30b944574cd33b259dbb936ea8ae36c2f1b4b88d5a70ab078c6a454a2fa1ac51e56ba668aa699db0f5b45715d31546c97d4c593439ef943d4f6559a784aafb5438e33db874a8a93ec3b3036b84bd1f08e5fc7bb8f1f7783b1396d9e4fcfb29f3d1bccb20000000000000007ceb558c22e527825ff7022aaa298ce59534cd53943ade4d336a57138e52b98e1083ff00d3a6f6392fed9ae8ddd3af72c68f1b8a9aa75617b81c2c511af2b50ad598056b9ff9b9ccc9ddd18fb5cdfb6c57bc9b7df78b27e7ebd579a3f15af1c1d5b63676ff00cf051691c26a4f0b4ec9dbd9dbbfc5c6166aa00000000000000000167f26b9439cb59516f5d0960bc49e328f9f4976145a4ed6add8abe3e5fb0bfd17775ad4d13d5e13fb2eb8ad59abbe54af31a96d413ef62ea4974c9e8c7eacbca5d68bb7fd6aaf72934b5cceaa68dfe9e6e18b554000000000000003e75aac6117293c12ff00b81155514c672ca9a66a9ca1e9ccdcdf9e57b9c6a271b7a2d3aaf663c29a7e14b7bdcbb0a9c5e26623c16f84c2c4cf675af5a54e308c6118a8c62928c52c124960925b914eb94c0010af463523284e2a51926a517b1a7a9a64d354d339c6d4554c55194ec53d9d590656359c75ba73c5d19f46f8bf8cbcfa99e9709898bf467d71b5e6717869b15e5d53b3d1a63a5c80000000000000001d4f27179cdde736deaad09470f8d1eed7994bca70692b7ad673f84fb2c7465cd5bdabf18f7f55a879f7a153f9f371ce5fdc70868c17eec563e7723d26069d5b14fe5e671f5eb622aece4ee688eb7180000000000010ab55413949e091155514c672ca9a66a9ca1cfdedd4aabc5ea4bbd8f0ff009382e5c9ae5df6edc510e8b2267f5e595185bdbd3b78c218eda5372949ed949e9eb6ff00eea392bc3d35ce739bb28c4d5453ab110f77b2ae52f06dfe667fee18f14b7dacf8e57d8b373032dd6bfb28dc57d1d3739c7b88b8c708bc16a6d9c77e88a2bca1db62b9ae8d697a73cf2a54b3b1b9b9a3a3a74945c749371d738c5e2935b9bde636a98aab8894ddae68a26a8553ecab94bc1b7f999ffb877714b7dae1e395f6255f3c6f6fe9385cc287378a716a9494f496f8bd3786f58f4b476613091455af133eae2c5e2f5e9d4988f4780b15600000000000000007bb215c735756d53c1ab0c7c57249f99b355fa75ed554f64b758af52ed3576c2ef3cabd628dcb1534ee6e65e156a8ff00bf23d5d98cadd31d91e0f237a73b954f6cf8bc86c6b000000000c360cdf3ab5e304e529249748aa7563394d31ad3943477979ce3c5b492d8b1d9ff00270dcae6b977dba2288799c9715e535e4d99a2e4b8af2919259205e7c90fb990f95abf58acc5748b4c2f471bdeee533dcabdf161f6b031c3f490cb11d154a3b275869e139f7bb9785ff05edab3adcb3b1457af6af246d6e714b56a47664e19934d715e52729467069ae2bca32933834d715e519499c329a7b184e6c9000000000061be04c13b1717fe75741e6f8b4bd3f185415658ca4f8b6fcacf45119464f33339ce68928000000046724936de09099cb96531133394379c985cb9e525b92a35305db0d6fa4a9d215eb5bdeb7d1d445373b72f45c6532e800000fcad1d88bc95142f4e487dcc87cad5fac55e2ba45a617a38dedae7ed352c9d75192c5350c57f1206582889bf4c4a31b33162a985337b771a51e2df7b1fbfa8f4372e4510f396edcd72b3791ea8e793ea4a4f16ee2a7d5a679fc6cccdcce5e8b051116b28772723ac00057bcaaf7f65e2d5f4d32e7456caf779a974b6da37f93842d94e00000000180367ff009397134f030e9e1ea6ba71c1b5c1b46e873cc652c04000001194924dbd884ce4988cf921abbaaee6f825b17dece5aeb9a9d545114baae49fdd15f2353d303871bd16f58607a5dde8ba4a85baafcf4cfbbdb3beb8b7a3cd6853d0d1d2a6dcbbaa7093c5e92df265858c3515d1154e6afbf8aae8b934c64d1be543297ea3e665feb36713b7dad5c76e767eef61f2a394bf51f332ff0058e276fb53c72e76386c0e972c2f1e487dcc87cad5fac55e2ba45ae13a38ded972875b43265e4f0c708c757f1204612ad5bd4cfeec3174eb59aa1f9f2ad4736e5278b65a5554d539caaa9a6298ca1d166ee7b5e64fa2e85bf37a2e4e7dd53729693493d7a4b56a468b9629ae739745bc4556e3286cfd953297ea3e665feb30e296fb59f1cb9d8f6647e52f2855b9b6a53e6746ad6a5096149a7a339c62f07a5b70663561688a667959d18aae6a889c97295eb057bcaaf7f65e2d5f4d32e7456caf779a974b6da37f93842d94e000000001803ddea0970f31af8486ee0a5f3cab4f42e2e23e0d5a8bc939226d4e74533d91e0c6ec6572a8ed9f1798cdac00062524962c4ce4988cdaeb9ace6fa16c473d756b3a68a755e768d6cdd7f250bfa457c8d4f4c0e3c6f45bddb81e9774f92e82a170a2794c5fd2977fc2fb1a65c617a28dfe2a6c5f4d3bbc1cb346f73a2d10941a212bc3923f7321f2b57eb1578be916d84e8a37bdbca67b957be2c3ed606187e9219623a2a9f9f8b5548000d8e6e7e5b63fb4d0fb5818dce64fda59dae7c7ddfa5ca65d2bde557bfb2f16afa69973a2b657bbcd4ba5b6d1bfc9c216ca70000000008cb6326113b16cfadef8a8f3dc69e978b382cf4b7e6efee56e9494d7ef4537e7c4b6c155ad629fc29b1d4eae22afcb4a753900312786b613119bc35eab9756e468aaacdbe9a727c1a30668b4425d7f253ee8af91a9e981c78ee8b7bb703d2ee9f25cc53ae5457297eea5dff0bec6997385e8637f8a9717d34eef072ed1bdce8b442516884ac9e4bb3bededa8caceeaa2a5ddb9d2a8ff00ab6a5863194bdeb4d378bd5afcbc38ab15553ad4ac30b7e9a69d4a9ebe5333ced6adaceced6aaad2ace3a738bc69c21192977db1b6e2960ba766ac70c3d8aa2ad6aa326789bf4cd3ab4ce79aa468ee578000d8e6e7e5b63fb4d0fb5818dce64fda59dae7c7ddfa5ca65d2bde557bfb2f16afa69973a2b657bbcd4ba5b6d1bfc9c216ca7000000000f5e48b7e76e2de9f875209f5692c7cd89aeed5ab6eaabe112db669d6b94d3f1985e47947ad56fca85a68d6b7ac96aa90707d7078af34fcc5de8baf3a2aa7e139fe7fe28b4adbcaba6bf8c65f8ffae28b45530de012f2569e97570355539b6d3193e2d183361a212834425d77257ee8af91a9e981c78ee8b7bb701d2ee9f25ca532e9467294bfa52eff0085f634cbac27431bfc5498be9a777839768dee745a2128b442516884a0d10961a21283442403639b9f96d8fed343ed606373993f69676b9f1f77e9729974af7955efecbc5abe9a65ce8ad95eef352e96db46ff0027085b29c000000003a5e4f2d39cbe84b0d546329be18b5a0beb63d870e91af56c4c7c793cddfa36deb5f89f8673e5e6b60f3cf46e6f3fec39eb2a924bbaa0d555d4b152feeb93ec3bb47dcd4bd11f1e4f4ef70e91b5af6267e1cbebdca95b3d0bce3cf52589ae6736c88c9f368c5922d10941a212c34425d67259ee8af92a9e989c58ee8b7c3bb01d36e9f25c8532e9477293eea5dff0bec6997584e8637f8a9319d355bbc1cbb47439916884a2d10945a2128b442506884b0d10941a212d8e6e7e5b63fb4d0fb5818dce64fda59dae7c7ddfa5ca65d2bde557bfb2f16afa69973a2b657bbcd4ba5b6d1bfc9c216ca7000000000b2b931b0d0a156e1ad75a5847c4862beb39791149a52e675c51f0f3f65ee8ab595b9afe3e5ef9bb32ad6a8ce0a49c5ac535835b9a7b8989ca73844c67194a8ccbd93e56d715a83fece5dcbe307ae2fc8d79cf4f6aef0b4457f1796bb6b82b9347c3f61ae68cd822d10945a2128b442506884bade4b7dd05f2553d3138b1fd16f87768fe9b74f92e229576d5dee6ed9d79caad6b4a55272c34a7282727824962fa9246da6f5ca632899c9aaab36ea9ce698cdf0f5a593bf41a3f3689e3177e694717b5f2c7e0f5a393bf40a3f368718bbf349c5ed7cb1f83d6864efd028fcda1c62efcd2717b5f2c7e18f5a1937f40a3f3488e1ee7cd29e02d7cb1f83d67e4dfd0287cd21c3dcf9a4e02dfcb07acec9bfa050f9a88e1ee7cd27016fe5863d6764df83e87cd4470f73e69381b7f2c1eb3726fc1f43e6a2386b9f349c0dbf9613a39a593a128ce163463283528c95349a9278a6ba53444ddae793394c5aa2396221ba35b62bde557bfb2f16afa69973a2b657bbcd4ba5b6d1bfc9c216ca700000007d2da84aace14e0b1954928c574b782ec22aaa2989aa76432a699aa629a76caf1c9d671a14a95186ca71515d382dbd6f69e52e5c9b95cd53d6f5b6adc5ba2288ea7a0c198070bca7646d3a70bc82d74bb9abd34dbd4fb1bfef74169a36f65336e7af62ab49d8ce98bb1d5b7edecad5a2e14c8b442516884a2d10945a212da66c65af505c7aa39ae73b8947474f43bec35e383e1c0d17ecf0b46ae7937e1ef7055eb659baef6547fa02fa4fe19c5fc6fd5ddeeeefe4a7e4eff00663d955fc1ebe93f8447f1df5777b9fc94fcbdfecc7b2bbf83d7d2bf087f1df5777ba7f919f97bfd98f6587f07afa57e111fc7fd5ddee9fe467e5eff00663d965fc1ebe95f843f8ffabbbdcfe427e5eff663d969fc1ebe95f844710fabbbdd3fc84fcbdfecc7b2e3f8397d2bf08710fabbbdcfe427e5eff663d975fc1cbe95f844711fabbbdd3c7e7e5eff00663d979fc1cbe95f84388fd5ddee71f9f97bfd987cafbf8397d2ff00088e23f5777ba78f7d3dfecc7b303f8357d2ff0008712fabbbdce3df4f7fb30f9627f06afa5fe111c4beaeef74f1dfa7bfd9afce1ce69652e6272b6e639b52c23cef38da968eb7dcc70ef7a7696982c34d9a6739db92ab1d898bd54651b3369ced7080000003b6e4d723e9d49ddcd6aa78c2974cdaeea5d89e1fbcf8157a4efe54c5b8ebdab6d17635aa9bb3d5c90b1ca45e0000857a519c6509c54a334e328bd8e2d60d3269aa699ce11553154653b14a6726469595c4e8bc5c7bea52f0a9bd9dab63ea3d2e1ef45ea22a8def3188b1366e4d33bbecd4b46e6945a2128b442516884a2d10941a212c3442506884a2d10945a2128b442516884a2d10945a2128b442506884b6993ac30c2735e2c7ef674dab5feaa735ebdfe696cce97280000003d3932c27735a9d0a6bba9bc31dc96f93e84b5985db94dba26bab64365ab755cae28a76caebc9b630b7a54e8d358469ac1716f7b7d2de2fb4f2f76e4dcae6bab6cbd55ab74dba228a7643d26b6c000003499d990637d41c352a90c65465c25be2fe2bc307d8f71d584c44d9af3ea9dae5c5e1a2fd1975c6cfded5375e8ca129427171941b528bda9ada99e8a262633879b98989ca76be4d0116884a2d10945a2128b442506884b0d10941a2128b442516884a2d10945a2128b442516884b63616386139af163f7b3a2d5aeb973ddbbfe61b13a1cc0000000202d6cc7cddf5252e76aaf6eaabbaf890daa1d7bdf4f51e7f1d8ae16ad5a79b1dfdbe8f4580c27034eb55ce9eeecf574e702c000000000390cf8cd5f5545dc508fb7457751fce456ef196e7bf670c2c7058be0e752be6f87b2b71d83e1235e8e778fbaad945a6d35835a9a7a9a7c1a2f14483442516884a2d10945a2128b442506884b0d10941a2128b442516884a2d10945a212f7d959ec9cd78abef66fb76fae5a2e5dea87bcdee70000000600b0b313355c746eee6383db429b5b3f5925c782ddb76e1853e3f199e76a8df3e5eabad1f82cb2bb737479fa3bc2a17000000000000071f9e599eae74ae2dd28d6f7d1d91a9fe53e9dfbf896383c6f07fd2bd9e1ecadc660784fef473bc7dd57d6a5284a509c5c651784a2d6124d6e68bb89898ce1473131394be6d0116884a2d10945a2128b442506884b0d10941a2128b442516884bdb6969b2525d4bef66eb76fae5a6e5cea87b4dcd00000000202c1cceccdd171b9bb8eb5ae9d17bb84a6b8f08eedfaf52a7c663f3fe96a7ef3e9eabac16032ffd2ec7da3d7d1de150b80000000000000000d0e72e6b51be5a4fdaeaa5846aa5afaa4bdf2f3adc75e1b175d9e4db1f0f4726270745fe5d93f1f555796b22d7b39e8578618f7b35ae9cbc597dcf597b6afd17633a27d5437ac576672ae3d1ad68d8d48b442516884a2d10945a21283442586884a0d1097aed6dbdf4bb17decdb451d72d55d7d50f59b5a40000001e9c9d93ab5ccd53a14dce5bf0d897193d8975985cbb45ba75ab9ca1b2ddaaee55ab44672b3735f33e95a6156ae156b785ef21e227bfe33d7d45162b1d55dfeb4f253df3f7f45f613014d9fed572d5dd1f6f574e702c00000000000000000000f95d5b53ab0953ab08ce32db1924d3ec32a6baa89ce99ca58d74535c6554670e0f2ef277b67653c3f5337abaa33fba5e52d6c692eabb1be3d3d1537f4675da9dd3ebeae12fec2adbcb42bd295396e525863d4f64974a2ce8ae9ae33a67355d74556e72ae329795a2508b442516884a2d10941a212f4dbd0f7cfb11b29a3ae5aebafaa1e93635000001f4b6b79d59285384a727b2318b94bc8b71155514c6754e50ca9a66a9d5a633976590f93fa93c27773e6d7e6a2d3a8fae5b23d98f61597f49d31c96e33edea5a58d17555cb7672ec8daefb27e4fa56f054e8d3508adcb6b7c5bdadf4b2a2e5daee4eb5739cae2ddaa2dd3ab44650f49adb00000000000000000000000007caeada9d58b855a719c5ed8ca2a51f2332a6baa99ce99c98d5453546554670e4f2a72796b57174652a0f82eee9ff2bd7e468eeb7a46e53ce8cfba5c17346daab993977c396ca1c9eded3c5d3d0acb768cb467fcb2c179d9db4690b356dce1c55e8ebd4ecca7f7b7d5a0bbc89754b1e72d6ac70dfcdc9c7f992c3ce74d37add5b2a8fcb9aab3729e7533f86b64d2d4cd9935670fb51a3bdf6232a69eb963557d50fb99b5b1a4b893923387b6db25dc55feaedea4fa553961e5c30355576dd3ceaa237b6d366e55cda66774b756598b7d530d284692f8f34df9238f9f0396bd23629d939fdbddd76f46dfab6c447de7d3374b93793ca10c1dc559557e0af6b8799b979d1c5734a573cc8cbbddd6b455b8e7cccf747af7babb1b1a5423a1469469ae118a58f4be2facaeb972bb939d539acaddaa2dc654464f418330000000000000000000000000000000000068339761d786dae5c46c56995bbe65f59d8a0bfce7c72777c8cae6c616b6acacd9f7bd451e297d8674c703b8000000000000000000001fffd9, 'CMS', '	\nhttp://localhost/cms', 'http://localhost/cms', 'Copyright © 2010 by SiteSecure.com');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` blob NOT NULL,
  `page_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `page_id` (`page_id`)
) ENGINE=InnoDB AUTO_INCREMENT=119 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `title`, `description`, `image`, `page_id`) VALUES
(106, 'image', 'img', 0x312e6a7067, 86),
(107, 'scene', 'view', 0x322e6a7067, 86),
(108, 'view', 'scene', 0x332e6a7067, 86),
(109, 'Programming', 'Programming', 0x342e6a7067, 87),
(110, 'right', 'right', 0x352e6a7067, 87),
(111, 'sc', 'sc', 0x362e6a706567, 88),
(112, 'science', 'sc', 0x372e6a7067, 88),
(118, 'ros', 'ros', 0x372e6a7067, 86);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `description` text NOT NULL,
  `parent_id` int(11) NOT NULL,
  `slug` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `content`, `description`, `parent_id`, `slug`) VALUES
(86, 'Program', '<p>Programming</p>\r\n', 'Programming', -1, 'Program'),
(87, 'web', '<p>web development</p>\r\n', 'web', 86, 'web'),
(88, 'science', '<p>science</p>\r\n', 'science', -1, 'science'),
(89, 'physics', '<p>phy</p>\r\n', 'sics', 88, 'physics'),
(90, 'chemestry', '<p>chemestry</p>\r\n', 'chemestry', 88, 'chemestry'),
(91, 'anroid', '<p>app</p>\r\n', 'app dev', 86, 'anroid'),
(92, 'sub', '<p>sub page</p>\r\n', 'sub', 86, 'sub'),
(93, 'page', '<p>content</p>\r\n', 'descr', 86, 'page');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `seo_title` text NOT NULL,
  `meta_title` text NOT NULL,
  `meta_keyword` varchar(100) NOT NULL,
  `added_date` date NOT NULL,
  `image` blob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `seo_title`, `meta_title`, `meta_keyword`, `added_date`, `image`) VALUES
(56, 'post3', 'post3', 'post3', 'post3', 'post3', '2018-05-25', 0x31352e6a70672031372e6a70672031392e6a7067),
(55, 'post2', 'post2', 'post2', 'post2', 'post2', '2018-05-25', 0x362e6a706720372e6a706720382e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

DROP TABLE IF EXISTS `slides`;
CREATE TABLE IF NOT EXISTS `slides` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `image` longblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `title`, `description`, `image`) VALUES
(52, 'slider', 'slider', 0x342e6a706720352e6a706720362e6a706720372e6a706720382e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

DROP TABLE IF EXISTS `subscribers`;
CREATE TABLE IF NOT EXISTS `subscribers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `date`) VALUES
(6, 'adhikari450@gmail.com', '2018-05-16 17:11:28'),
(16, 'aikido@gmail.com', '2018-05-21 15:56:51'),
(30, 'girllittle273@yahoo.com', '2018-05-25 12:50:58'),
(19, 'dd@gmail.com', '2018-05-23 16:30:43'),
(20, 'email@domain.com', '2018-05-24 10:29:30'),
(22, 'roshan.@gmail.com', '2018-05-24 10:34:44');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_country`
--

DROP TABLE IF EXISTS `tbl_country`;
CREATE TABLE IF NOT EXISTS `tbl_country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(3) NOT NULL,
  `name` varchar(150) NOT NULL,
  `phonecode` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=247 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_country`
--

INSERT INTO `tbl_country` (`id`, `code`, `name`, `phonecode`) VALUES
(1, 'AF', 'Afghanistan', 93),
(2, 'AL', 'Albania', 355),
(3, 'DZ', 'Algeria', 213),
(4, 'AS', 'American Samoa', 1684),
(5, 'AD', 'Andorra', 376),
(6, 'AO', 'Angola', 244),
(7, 'AI', 'Anguilla', 1264),
(8, 'AQ', 'Antarctica', 0),
(9, 'AG', 'Antigua And Barbuda', 1268),
(10, 'AR', 'Argentina', 54),
(11, 'AM', 'Armenia', 374),
(12, 'AW', 'Aruba', 297),
(13, 'AU', 'Australia', 61),
(14, 'AT', 'Austria', 43),
(15, 'AZ', 'Azerbaijan', 994),
(16, 'BS', 'Bahamas The', 1242),
(17, 'BH', 'Bahrain', 973),
(18, 'BD', 'Bangladesh', 880),
(19, 'BB', 'Barbados', 1246),
(20, 'BY', 'Belarus', 375),
(21, 'BE', 'Belgium', 32),
(22, 'BZ', 'Belize', 501),
(23, 'BJ', 'Benin', 229),
(24, 'BM', 'Bermuda', 1441),
(25, 'BT', 'Bhutan', 975),
(26, 'BO', 'Bolivia', 591),
(27, 'BA', 'Bosnia and Herzegovina', 387),
(28, 'BW', 'Botswana', 267),
(29, 'BV', 'Bouvet Island', 0),
(30, 'BR', 'Brazil', 55),
(31, 'IO', 'British Indian Ocean Territory', 246),
(32, 'BN', 'Brunei', 673),
(33, 'BG', 'Bulgaria', 359),
(34, 'BF', 'Burkina Faso', 226),
(35, 'BI', 'Burundi', 257),
(36, 'KH', 'Cambodia', 855),
(37, 'CM', 'Cameroon', 237),
(38, 'CA', 'Canada', 1),
(39, 'CV', 'Cape Verde', 238),
(40, 'KY', 'Cayman Islands', 1345),
(41, 'CF', 'Central African Republic', 236),
(42, 'TD', 'Chad', 235),
(43, 'CL', 'Chile', 56),
(44, 'CN', 'China', 86),
(45, 'CX', 'Christmas Island', 61),
(46, 'CC', 'Cocos (Keeling) Islands', 672),
(47, 'CO', 'Colombia', 57),
(48, 'KM', 'Comoros', 269),
(49, 'CG', 'Republic Of The Congo', 242),
(50, 'CD', 'Democratic Republic Of The Congo', 242),
(51, 'CK', 'Cook Islands', 682),
(52, 'CR', 'Costa Rica', 506),
(53, 'CI', 'Cote D''Ivoire (Ivory Coast)', 225),
(54, 'HR', 'Croatia (Hrvatska)', 385),
(55, 'CU', 'Cuba', 53),
(56, 'CY', 'Cyprus', 357),
(57, 'CZ', 'Czech Republic', 420),
(58, 'DK', 'Denmark', 45),
(59, 'DJ', 'Djibouti', 253),
(60, 'DM', 'Dominica', 1767),
(61, 'DO', 'Dominican Republic', 1809),
(62, 'TP', 'East Timor', 670),
(63, 'EC', 'Ecuador', 593),
(64, 'EG', 'Egypt', 20),
(65, 'SV', 'El Salvador', 503),
(66, 'GQ', 'Equatorial Guinea', 240),
(67, 'ER', 'Eritrea', 291),
(68, 'EE', 'Estonia', 372),
(69, 'ET', 'Ethiopia', 251),
(70, 'XA', 'External Territories of Australia', 61),
(71, 'FK', 'Falkland Islands', 500),
(72, 'FO', 'Faroe Islands', 298),
(73, 'FJ', 'Fiji Islands', 679),
(74, 'FI', 'Finland', 358),
(75, 'FR', 'France', 33),
(76, 'GF', 'French Guiana', 594),
(77, 'PF', 'French Polynesia', 689),
(78, 'TF', 'French Southern Territories', 0),
(79, 'GA', 'Gabon', 241),
(80, 'GM', 'Gambia The', 220),
(81, 'GE', 'Georgia', 995),
(82, 'DE', 'Germany', 49),
(83, 'GH', 'Ghana', 233),
(84, 'GI', 'Gibraltar', 350),
(85, 'GR', 'Greece', 30),
(86, 'GL', 'Greenland', 299),
(87, 'GD', 'Grenada', 1473),
(88, 'GP', 'Guadeloupe', 590),
(89, 'GU', 'Guam', 1671),
(90, 'GT', 'Guatemala', 502),
(91, 'XU', 'Guernsey and Alderney', 44),
(92, 'GN', 'Guinea', 224),
(93, 'GW', 'Guinea-Bissau', 245),
(94, 'GY', 'Guyana', 592),
(95, 'HT', 'Haiti', 509),
(96, 'HM', 'Heard and McDonald Islands', 0),
(97, 'HN', 'Honduras', 504),
(98, 'HK', 'Hong Kong S.A.R.', 852),
(99, 'HU', 'Hungary', 36),
(100, 'IS', 'Iceland', 354),
(101, 'IN', 'India', 91),
(102, 'ID', 'Indonesia', 62),
(103, 'IR', 'Iran', 98),
(104, 'IQ', 'Iraq', 964),
(105, 'IE', 'Ireland', 353),
(106, 'IL', 'Israel', 972),
(107, 'IT', 'Italy', 39),
(108, 'JM', 'Jamaica', 1876),
(109, 'JP', 'Japan', 81),
(110, 'XJ', 'Jersey', 44),
(111, 'JO', 'Jordan', 962),
(112, 'KZ', 'Kazakhstan', 7),
(113, 'KE', 'Kenya', 254),
(114, 'KI', 'Kiribati', 686),
(115, 'KP', 'Korea North', 850),
(116, 'KR', 'Korea South', 82),
(117, 'KW', 'Kuwait', 965),
(118, 'KG', 'Kyrgyzstan', 996),
(119, 'LA', 'Laos', 856),
(120, 'LV', 'Latvia', 371),
(121, 'LB', 'Lebanon', 961),
(122, 'LS', 'Lesotho', 266),
(123, 'LR', 'Liberia', 231),
(124, 'LY', 'Libya', 218),
(125, 'LI', 'Liechtenstein', 423),
(126, 'LT', 'Lithuania', 370),
(127, 'LU', 'Luxembourg', 352),
(128, 'MO', 'Macau S.A.R.', 853),
(129, 'MK', 'Macedonia', 389),
(130, 'MG', 'Madagascar', 261),
(131, 'MW', 'Malawi', 265),
(132, 'MY', 'Malaysia', 60),
(133, 'MV', 'Maldives', 960),
(134, 'ML', 'Mali', 223),
(135, 'MT', 'Malta', 356),
(136, 'XM', 'Man (Isle of)', 44),
(137, 'MH', 'Marshall Islands', 692),
(138, 'MQ', 'Martinique', 596),
(139, 'MR', 'Mauritania', 222),
(140, 'MU', 'Mauritius', 230),
(141, 'YT', 'Mayotte', 269),
(142, 'MX', 'Mexico', 52),
(143, 'FM', 'Micronesia', 691),
(144, 'MD', 'Moldova', 373),
(145, 'MC', 'Monaco', 377),
(146, 'MN', 'Mongolia', 976),
(147, 'MS', 'Montserrat', 1664),
(148, 'MA', 'Morocco', 212),
(149, 'MZ', 'Mozambique', 258),
(150, 'MM', 'Myanmar', 95),
(151, 'NA', 'Namibia', 264),
(152, 'NR', 'Nauru', 674),
(153, 'NP', 'Nepal', 977),
(154, 'AN', 'Netherlands Antilles', 599),
(155, 'NL', 'Netherlands The', 31),
(156, 'NC', 'New Caledonia', 687),
(157, 'NZ', 'New Zealand', 64),
(158, 'NI', 'Nicaragua', 505),
(159, 'NE', 'Niger', 227),
(160, 'NG', 'Nigeria', 234),
(161, 'NU', 'Niue', 683),
(162, 'NF', 'Norfolk Island', 672),
(163, 'MP', 'Northern Mariana Islands', 1670),
(164, 'NO', 'Norway', 47),
(165, 'OM', 'Oman', 968),
(166, 'PK', 'Pakistan', 92),
(167, 'PW', 'Palau', 680),
(168, 'PS', 'Palestinian Territory Occupied', 970),
(169, 'PA', 'Panama', 507),
(170, 'PG', 'Papua new Guinea', 675),
(171, 'PY', 'Paraguay', 595),
(172, 'PE', 'Peru', 51),
(173, 'PH', 'Philippines', 63),
(174, 'PN', 'Pitcairn Island', 0),
(175, 'PL', 'Poland', 48),
(176, 'PT', 'Portugal', 351),
(177, 'PR', 'Puerto Rico', 1787),
(178, 'QA', 'Qatar', 974),
(179, 'RE', 'Reunion', 262),
(180, 'RO', 'Romania', 40),
(181, 'RU', 'Russia', 70),
(182, 'RW', 'Rwanda', 250),
(183, 'SH', 'Saint Helena', 290),
(184, 'KN', 'Saint Kitts And Nevis', 1869),
(185, 'LC', 'Saint Lucia', 1758),
(186, 'PM', 'Saint Pierre and Miquelon', 508),
(187, 'VC', 'Saint Vincent And The Grenadines', 1784),
(188, 'WS', 'Samoa', 684),
(189, 'SM', 'San Marino', 378),
(190, 'ST', 'Sao Tome and Principe', 239),
(191, 'SA', 'Saudi Arabia', 966),
(192, 'SN', 'Senegal', 221),
(193, 'RS', 'Serbia', 381),
(194, 'SC', 'Seychelles', 248),
(195, 'SL', 'Sierra Leone', 232),
(196, 'SG', 'Singapore', 65),
(197, 'SK', 'Slovakia', 421),
(198, 'SI', 'Slovenia', 386),
(199, 'XG', 'Smaller Territories of the UK', 44),
(200, 'SB', 'Solomon Islands', 677),
(201, 'SO', 'Somalia', 252),
(202, 'ZA', 'South Africa', 27),
(203, 'GS', 'South Georgia', 0),
(204, 'SS', 'South Sudan', 211),
(205, 'ES', 'Spain', 34),
(206, 'LK', 'Sri Lanka', 94),
(207, 'SD', 'Sudan', 249),
(208, 'SR', 'Suriname', 597),
(209, 'SJ', 'Svalbard And Jan Mayen Islands', 47),
(210, 'SZ', 'Swaziland', 268),
(211, 'SE', 'Sweden', 46),
(212, 'CH', 'Switzerland', 41),
(213, 'SY', 'Syria', 963),
(214, 'TW', 'Taiwan', 886),
(215, 'TJ', 'Tajikistan', 992),
(216, 'TZ', 'Tanzania', 255),
(217, 'TH', 'Thailand', 66),
(218, 'TG', 'Togo', 228),
(219, 'TK', 'Tokelau', 690),
(220, 'TO', 'Tonga', 676),
(221, 'TT', 'Trinidad And Tobago', 1868),
(222, 'TN', 'Tunisia', 216),
(223, 'TR', 'Turkey', 90),
(224, 'TM', 'Turkmenistan', 7370),
(225, 'TC', 'Turks And Caicos Islands', 1649),
(226, 'TV', 'Tuvalu', 688),
(227, 'UG', 'Uganda', 256),
(228, 'UA', 'Ukraine', 380),
(229, 'AE', 'United Arab Emirates', 971),
(230, 'GB', 'United Kingdom', 44),
(231, 'US', 'United States', 1),
(232, 'UM', 'United States Minor Outlying Islands', 1),
(233, 'UY', 'Uruguay', 598),
(234, 'UZ', 'Uzbekistan', 998),
(235, 'VU', 'Vanuatu', 678),
(236, 'VA', 'Vatican City State (Holy See)', 39),
(237, 'VE', 'Venezuela', 58),
(238, 'VN', 'Vietnam', 84),
(239, 'VG', 'Virgin Islands (British)', 1284),
(240, 'VI', 'Virgin Islands (US)', 1340),
(241, 'WF', 'Wallis And Futuna Islands', 681),
(242, 'EH', 'Western Sahara', 212),
(243, 'YE', 'Yemen', 967),
(244, 'YU', 'Yugoslavia', 38),
(245, 'ZM', 'Zambia', 260),
(246, 'ZW', 'Zimbabwe', 263);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(23, 'aikido763@gmail.com', '1111');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
