-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1:3306
-- 生成日期： 2020-01-14 06:06:47
-- 服务器版本： 5.7.24
-- PHP 版本： 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `qzl_idle_book_trade`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'txztxz', '123qwe'),
(2, 'hxhhxh', '46f94c8de14fb36680850768ff1b7f2a');

-- --------------------------------------------------------

--
-- 表的结构 `advert`
--

DROP TABLE IF EXISTS `advert`;
CREATE TABLE IF NOT EXISTS `advert` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `img` varchar(100) NOT NULL,
  `pos` tinyint(3) UNSIGNED NOT NULL,
  `url` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `writer` varchar(50) NOT NULL,
  `img` varchar(100) NOT NULL,
  `info` mediumtext NOT NULL,
  `oldprice` float(8,2) UNSIGNED NOT NULL,
  `nowprice` float(8,2) UNSIGNED NOT NULL,
  `class_id` int(10) UNSIGNED NOT NULL,
  `stock` int(10) UNSIGNED NOT NULL,
  `sales` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `supplier` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `shelf` tinyint(3) UNSIGNED NOT NULL,
  `recommend` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `book`
--

INSERT INTO `book` (`id`, `name`, `writer`, `img`, `info`, `oldprice`, `nowprice`, `class_id`, `stock`, `sales`, `supplier`, `shelf`, `recommend`) VALUES
(1, '漫画人类简史', '斯塔熊文化', '15789064921654487263.jpg', '从人类起源到无机生命……一本孩子自己能读懂的人类历史启蒙书，著名科学家孙正凡博士审读，中国科学院倾情推荐,荣获“新锐童书奖”。', 30.00, 22.50, 2, 86, 65, 0, 1, 1),
(2, '中国城市大洗牌：未来三十年国人生存指南', '黄汉城 史哲 林小琬', '15789061882107939699.jpg', '逃离北上广深?哪个城市更有发展潜力？身在都市如何化解我们的焦虑？2、逃离北上广深?哪个城市更有发展潜力？', 59.00, 44.20, 5, 76, 26, 0, 1, 1),
(4, '冰雪奇缘双语电影故事大合集', '国开童媒', '15789067561471154862.jpg', '这是一套以《冰雪奇缘》为主题的故事书，共有8个分册，包含冰雪奇缘故事3册、冰雪奇缘2故事3册和冰雪奇缘的番外故事2册。冰雪奇缘大礼包，一次性畅读冰雪奇缘系列故事。', 150.40, 110.75, 2, 18, 8, 0, 1, 1),
(5, '画说我们的二十四节气', '轩毅文化', '1578907123695229631.jpg', '是一套为儿童讲述二十四节气的原创科普图画书，包括节气概说、动植物、传统习俗、节气故事等板块，通过古朴淡雅的中国风格图画和充满诗意的语言，讲述二十四节气这项古老而伟大的中国发明的历史由来以及它对人们生产生活带来的影响。', 42.80, 14.30, 2, 168, 265, 0, 1, 1),
(6, '物种起源（绘本版）', '查尔斯·达尔文（Charles Darwin ）', '15789073781483825621.jpg', '根据人类历史上极为重要的科学巨着《物种起源》创作的精美科普绘本，作者提炼出原着各章节重要内容，用插画的形式向孩子清晰地解读达尔文的经典学说。', 98.00, 72.00, 2, 16, 2, 0, 1, 1),
(7, '穿过地平线', '李四光', '15789075631762296772.jpg', '本书采用文学随笔的形式来综合反映李四光的治学、做人的品质及高雅的文化艺术素养。将他不同时期写作的机具有学术性、趣味性、可读性的论著、随笔小品、谈艺录精选成集，希望能让广大读者更好地理解中国地质力学的发展，中国科学家的治学精神。', 24.80, 19.80, 3, 26, 10, 0, 1, 1),
(8, '朗文·外研社·新概念英语1', '亚历山大 何其莘', '15789077611407149748.jpg', '《朗文·外研社·新概念英语1 英语初阶》包含72篇课文和72课练习，全书组成了一个循序渐进、按语言结构难度分级的基础英语概论。课文短小精悍，便于记忆，可以使零起点的学生在使用语言过程中逐渐增强信心，提高语言能力。', 39.00, 29.00, 3, 56, 8, 0, 1, 1),
(9, '汉字奇兵（美绘版）', '张之路', '1578907979872500465.jpg', '《汉字奇兵》是一部富有文化内涵的小说，作者把一个个中国汉字刻画得活灵活现，栩栩如生，展现了汉字的形成、发展及演变，也展现了中国传统文化中悲天悯人的情怀、见义勇为的侠肝义胆、舍生取义的人生追求……', 48.00, 36.20, 1, 23, 7, 0, 1, 1),
(10, '守夜者3 生死盲点', '秦明', '15789081361316337346.jpg', '击穿人性盲点，直面尘封几十年的真相！刚破获二十二人越狱案、幽灵骑士被杀案的守夜者组织，当凶手被缉拿后，负责审讯的组织导师唐骏却葬身工地！\r\n诡异的是，现场遗留的手环步数与唐骏手机记录步数有着巨大的差距……', 45.60, 32.00, 4, 388, 270, 0, 1, 1),
(11, '庆余年·北海有雾', '猫腻', '1578908282366509081.jpg', '范闲，庆国数十年风雨飘摇的见证者。他容貌俊美，个性鲜明，热血激情。自海边小城崭露头角，历经家族恩怨、江湖纷争、庙堂权谋的种种磨炼。他重情重义，喜怒不形于色，深藏绝世神功，看似云淡风轻，心中却风雷激荡。他才华盖世，诗文冠绝京都，抨击科考弊政，解救囚入邻国人质，重组谍报网，彻查走私案，接手庞大的商业财团，凭着过人的天赋与才智，在刀光剑影中杀出一片天地，成就一代传奇伟业。', 39.00, 27.00, 4, 362, 280, 0, 1, 1),
(12, '平均分', '康辉', '15789084331924063901.jpg', '看似“平庸”，也道出了“平庸”这枚硬币的另一面——也许每一个单项都不是冲在头阵的，但每一个单项都无法忽视他的存在。康辉文如其人，平淡中有韧劲儿。在生活的、职业的赛场上，想不甘人后，只有努力地去试每一个选项，在每一个选项上都能及格，在及格之上再努力，才能给自己拿到一个高一点的平均分。', 58.00, 43.00, 4, 25, 9, 0, 1, 1),
(13, '狼图腾', '姜戎', '1578911522654769198.jpg', '《狼图腾》被誉为一部描绘蒙古草原狼的“旷世奇书”，它抒写了狼的团队精神和家族责任感，狼的智慧、顽强和尊严，倔强可爱的小狼在失去自由后艰难的成长过程，狼嗥、狼耳、狼眼、狼食、狼烟、狼旗……那些精灵般的狼仿佛随时能从书中呼啸而出。《狼图腾》不仅是一部好读的长篇小说，其中的信念、勇气与团队精神更是激励着一代又一代人，让人在笑与泪中，重拾人生的信念和勇气。', 69.00, 44.90, 4, 1268, 720, 0, 1, 1),
(14, '我这一辈子', '老舍', '15789116691780231305.jpg', '这部选集选目丰富，收录《我这一辈子》《月牙儿》《断魂枪》等名篇，写得俏皮，泼辣，警辟，使人读了发笑，全面地展示了老舍在短篇小说创作领域的艺术成就。阅读名家的作品，内心也能得到极大的开解。', 45.00, 31.30, 4, 68, 32, 0, 1, 1),
(15, '雾行者', '路内', '15789117951280783734.jpg', '五个章节，五种迥异风格：梦境、寓言、当代现实、小说素材、文学批评拼织成复杂强悍的叙事体，充满内在回响。深情而狂暴，现实而迷乱，带领读者横穿修辞术的318国道，不绝如缕，直抵小说结尾的喜马拉雅山脉。\r\n\r\n', 88.00, 46.20, 4, 35, 17, 0, 1, 1),
(16, '盗墓笔记·十年', '南派三叔', '157891195218875507.jpg', '畅销神话《盗墓笔记》系列全新作品，书内包括《十年》《钓王》《陈皮阿四》三部短篇作品，完美填补《盗墓笔记》的缺失与遗憾，在《盗墓笔记.十年》里，读者将会同心头的意难平铁三角以及解语花、秀秀、陈皮阿四这些熟悉的角色重逢，一同开启新的冒险旅程！', 46.00, 22.00, 4, 366, 187, 0, 1, 1),
(17, '钱从哪里来', '香帅', '15789120531375770172.jpg', '本书将“财富”分为“宏观、行业、城市、资产”四大板块，根据100个“财富相关的小问题”，按照“人生钱”和“钱生钱”的逻辑，回答了做什么职业，入什么行业，在哪里赚钱，以及投什么，什么时候投等具象问题，所有的问题都是现实中的真问题，也都是读者关切的个人财富问题。', 59.00, 36.00, 5, 62, 28, 0, 1, 1),
(18, '华为团队工作法', '吴建国', '15789121501561512743.jpg', '作为构建华为人才体系的核心成员，吴建国在本书中聚焦人才选拔、团队搭建、人才培养、激励机制与组织激活，系统阐述了华为“精准选配、有效激励、加速成长”三位一体的团队管理法则，揭示了华为团队建设和人才管理的核心要点。', 68.00, 51.00, 5, 72, 66, 0, 1, 1),
(19, '中国经济2020', '王德培', '15789137186806878.jpg', '本书旨在对2020年的中国经济进行深入解析和预测，探讨究竟是谁开启了破碎化的序幕，指出中美贸易冲突既是终ji也是过程，提出中国“三个世界”观点，带领读者穿越重重迷雾，寻找中国经济新亮点。', 58.00, 38.70, 5, 88, 72, 0, 0, 1),
(20, '5G时代：经济增长新引擎', '孙松林', '157891439767496419.jpg', '基于对通信行业二十多年的研究与思考，对国家相关政策的长期跟踪与分析，从技术创新、产业链重构、融合应用等维度，对5G在做大、做强产业、推动经济增长方面的支撑作用进行了深入解读，对关键信息给出了独到而准确的阐述。本书获得工程院院士、工信部专家等一致推荐与好评。', 69.00, 51.00, 5, 123, 23, 0, 1, 1),
(21, '2020年中国经济形势分析与预测', '谢伏瞻 蔡昉', '15789146261431622564.jpg', '“经济蓝皮书”坚持问题导向，敏锐捕捉经济形势变化和苗头性问题，对纷繁复杂的经济形势进行全方位深度分析，并对未来走势进行预测，内容涵盖宏观形势与政策展望，财政形势与税收分析，货币政策与金融市场，产业运行与高质量发展，投资、消费与对外贸易，就业形势与收入分配等。', 128.00, 100.80, 5, 15, 7, 0, 1, 1),
(22, '区块链——领导干部读本', '任仲文', '15789147181712719222.jpg', '《区块链——领导干部读本（修订版）》是党员领导干部的重要学习参考。书稿围绕区块链的概念、价值、应用，区块链发展带来的新挑战，以及区块链未来前景，进行深入分析、阐释。收入了包括人民网总裁叶蓁蓁“从互联网思维到区块链思维”、万向控股有限公司副董事长肖风“区块链的特性”、工信部工业经济研究所所长于佳宁“区块链将成为振兴实体经济的助推器”等重要文章。有助于读者对这一不断演进变化的新领域、新技术有更为深入系统的了解。', 118.00, 94.40, 5, 8, 6, 0, 1, 1),
(23, '墨菲定律', '大美吾疆', '1578915047903573030.jpg', '墨菲定律改变我们的心理，我们通过心理的改变来改善生活。本书是一本实用、耐读的日常行为心理指南，内容涉及情绪管理、人际关系、投资消费、职场生存、爱情婚姻等诸多方面。通过细读本书，你将从自我认识、自我管理、自我突破开始，继而投射到生活的方方面面，从而提高生存的品质和生命的质量。', 39.80, 29.90, 6, 112, 76, 0, 1, 1),
(24, '拥抱十年后的自己', 'Lydia木木', '15789151771560034647.jpg', '本书是作者十余年工作经验的总结，分四个章节“直面自己 学会选择”“职业规划到底有多重要”“让你如虎添翼的工作技巧”“无论工作还是生活 拎得清重要”，为读者阐述职场生存的本质。作者将自己的工作经验毫无保留的和盘托出，旨在帮助更多的年轻人找到职场的方向，让年轻人早日意识到“我们到底是在为什么而工作”，这些工作理念和工作技巧非常值得工作十年以内的读者认真学习。', 48.00, 38.40, 6, 56, 28, 0, 1, 1),
(25, '破局', '哈叔', '15789154722076572461.jpg', '人与人之间的差距，从表面上看是智商、情商和运气的差距，但实际上是格局的距。放大格局是获得成功的重要前提，对人一生的发展很重要。要想看到更大的世界，要努力放大、突破自己的格局。 哈叔基于自己、身边人和读者的真实经历、所感所悟，为职场年轻人创作的一本励志读物。作者从思维、视界、做事、处世、沟通和管理六个角度出发，指导读者树立格局意识，培养总揽全局的能力。书中众多真实、鲜活的案例点出了“格局决定人生”这一真谛，给出了打破困局、创造美好人生的诚恳建议。 ', 45.00, 35.40, 6, 75, 36, 0, 1, 1),
(26, '拜占庭一千年', '狄奥尼修斯·史塔克普洛斯（Dionysios Stathakopoulos）', '15789155931780333120.jpg', '狄奥尼修斯·史塔克普洛斯不落窠臼，打破传统的研究模式，将拜占庭帝国不同历史阶段的政治、经济、文化等多方面的显著特征进行了通俗解读。', 69.80, 38.40, 7, 77, 16, 0, 1, 1),
(27, '全球通史', '斯塔夫里阿诺斯', '15789157791992656489.jpg', '《全球通史》首开由历史学家运用全球观点囊括全球文明而编写的世界历史的先河。本书分八个部分，四十四个章节，主要讲述了世界历史的进化，世界文明的发展及其对现代社会的影响。作者着眼于全球，侧重于那些有影响的、促进历史发展的历史事件，其中包括原始社会、欧亚大陆的古代文明、欧亚大陆的原始文明、欧亚以外的世界、地区分割后的世界、西方世界的崛起、西方人统治的世界、西方的衰落与成功等八个主要的部分。', 138.00, 107.00, 7, 9, 15, 0, 1, 1),
(28, '天气之子官方视觉设定集', '日本角川书店', '1578915885578508971.jpg', '本书是新海诚导演作品《天气之子》的官方设定集，收录了故事导览、声优访谈、角色设定、美术设定&美术背景、制作团队访谈等丰富的内容，回顾了电影的名场景和唯美画面，展示了从企划、剧本、分镜到作画、摄影、配乐等电影制作幕后的方方面面。', 78.00, 47.70, 8, 26, 14, 0, 1, 1),
(29, '颜真卿及唐代书风', '谭振飞', '15789159941089400538.jpg', '《颜真卿和他的时代》集中展示了唐代书法研究中新的进展与成果。书中15位作者，包括书法理论、书法史专业的研究者、唐代史、书画鉴定领域的专家学者。关注唐楷、章草、唐碑、墓志书、“唐尚法”等唐代书法的方方面面，聚焦了代表整个唐代书法风貌的颜真卿，他的篆籀气，尚法的精神，名作《祭侄文稿》……', 68.00, 54.40, 8, 72, 63, 0, 1, 1),
(30, '你好，地球：从太空俯瞰地球之美', '谢尔盖·梁赞斯基', '15789161542130824355.jpg', '《你好，地球》从太空的高度，以俯瞰的视角，重新审视我们的星球，这是一本不同寻常的摄影集，大自然的鬼斧神工一览无余', 98.00, 85.80, 9, 12, 7, 0, 1, 1),
(31, '深入理解Java虚拟机', '周志明', '1578916268529687258.jpg', '这是一部从工作原理和工程实践两个维度深入剖析JVM的著作，是计算机领域公认的经典，繁体版在台湾也颇受欢迎。\r\n\r\n自2011年上市以来，前两个版本累计印刷36次，销量超过30万册，两家主要网络书店的评论近90000条，内容上近乎零差评，是原创计算机图书领域不可逾越的丰碑', 129.00, 89.00, 10, 56, 32, 0, 1, 1),
(32, '瑞丽家居设计（2020年第1期）', '周小捷', '1578916419833538714.jpg', '寻找你的生活方式\r\nFind Your Lifestyle', 20.00, 16.50, 11, 18, 9, 0, 1, 1),
(33, '机器学习中的数学', '孙博', '15789664441497697696.jpg', '本书是一本系统介绍机器学习中涉及的数学知识的入门图书，本书从机器学习中的数学入门开始，以展示数学的友好性为原则，讲述了机器学习中的一些常见的数学知识。机器学习作为人工智能的核心技术，对于数学基础薄弱的人来说，其台阶是陡峭的，本书力争在陡峭的台阶前搭建一个斜坡，为读者铺平机器学习的数学之路。', 89.80, 75.30, 10, 16, 23, 0, 1, 1),
(34, 'Python编程 从入门到实践', '埃里克·马瑟斯（Eric Matthes', '1578966541968920743.jpg', '本书是一本针对所有层次的Python读者而作的Python入门书。全书分两部分：首部分介绍用Python 编程所必须了解的基本概念，包括matplotlib、NumPy和Pygal等强大的Python库和工具介绍，以及列表、字典、if语句、类、文件与异常、代码测试等内容；第二部分将理论付诸实践，讲解如何开发三个项目，包括简单的Python 2D游戏开发，如何利用数据生成交互式的信息图，以及创建和定制简单的Web应用，并帮读者解决常见编程问题和困惑。', 89.00, 59.70, 10, 57, 36, 0, 1, 1),
(35, '知识图谱：概念与技术', '肖仰华', '15789681971101833149.jpg', '知识图谱是一种大规模语义网络，已经成为大数据时代知识工程的代表性进展。知识图谱技术是实现机器认知智能和推动各行业智能化发展的关键基础技术。知识图谱也成为大规模知识工程的代表性实践，其学科日益完善。\r\n\r\n本书是一本系统介绍知识图谱概念、技术与实践的书籍。全书共5篇，由16 章构成，力求涵盖知识图谱相关的基本概念与关键技术。', 118.00, 100.80, 10, 8, 2, 0, 1, 1),
(36, 'Adobe Photoshop CC 2019经典教程', '安德鲁·福克纳（Andrew Faulkner）', '15789682991809650132.jpg', '本书由Adobe的专家编写，是Adobe Photoshop CC 2019软件的正规学习用书。本书语言通俗易懂并配以大量的图示，特别适合Photoshop新手阅读，也适合有一定使用经验的用户，用户从中可学到大量高级功能和Photoshop CC 2019新增的功能，还适合Photoshop相关培训班学员及广大爱好者学习。', 108.00, 54.00, 10, 45, 10, 0, 1, 1),
(37, '代码精进之路 从码农到工匠', '张建飞', '1578968393387520161.jpg', '这是一本为专业程序员而写的书，写好代码、追求卓越和工匠精神是每个程序员都应该具备的优秀品质。 \r\n本书共有13章内容，主要分为技艺部分、思想部分和实践部分。技艺部分详细介绍了编程技巧和方法论，并配以详尽的代码案例，有助于读者提高编写代码的能力，优化代码质量。思想部分主要包括抽象能力、分治思想，以及程序员应该具备的素养等内容。实践部分主要介绍了常见的应用架构模式，以及COLA架构的设计原理。', 69.00, 34.50, 10, 68, 27, 0, 1, 1),
(38, '大型互联网企业安全架构', '石祖文', '1578969590132912710.jpg', '本书全面阐述了新一代安全理论与安全架构，并结合作者自身经验层层剖析了包括Google公司在内的各大互联网企业所应用的各种关键安全技术的原理及具体实现。适合对信息安全有一定了解的互联网企业CISO、安全架构师、安全总监、安全开发工程师等从业者阅读，也适合CTO、研发总监、运维总监等互联网精英用于了解互联网企业安全建设。', 79.00, 66.20, 10, 26, 12, 0, 1, 1),
(39, '区块链开发从入门到精通', '陈人通', '15789697061997715945.jpg', '本书系统讲述了区块链原理、技术与应用，分三大部分：区块链思想以及去中心化应用、区块链技术在去中心化数字货币系统中的应用、区块链热议话题与区块链技术的典型应用场景；区块链的核心技术——密码算法和共识算法；最后一部分系统介绍了区块链的应用开发平台——以太坊和超级账本，包括以太坊项目的主要设计及如何用 Solidity 语言创建能够部署到以太坊平台的智能合约应用、后起之秀超级账本项目（尤其是 Fabric 子项目）的设计以及如何在 Fabric 超级账本项目上搭建和运行区块链网络。', 79.80, 72.50, 10, 86, 66, 0, 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `bookshelf`
--

DROP TABLE IF EXISTS `bookshelf`;
CREATE TABLE IF NOT EXISTS `bookshelf` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `book_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `bookshelf`
--

INSERT INTO `bookshelf` (`id`, `book_id`, `user_id`) VALUES
(1, 15, 12);

-- --------------------------------------------------------

--
-- 表的结构 `class`
--

DROP TABLE IF EXISTS `class`;
CREATE TABLE IF NOT EXISTS `class` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `class`
--

INSERT INTO `class` (`id`, `name`) VALUES
(1, '文学类'),
(2, '少儿类'),
(3, '教育类'),
(4, '小说文学'),
(5, '金融经济类'),
(6, '励志类'),
(7, '人文社科类'),
(8, '艺术摄影类'),
(9, '科技类'),
(10, '计算机与互联网类'),
(11, '其他类');

-- --------------------------------------------------------

--
-- 表的结构 `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `content` text,
  `book_id` int(10) UNSIGNED NOT NULL,
  `time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `indent`
--

DROP TABLE IF EXISTS `indent`;
CREATE TABLE IF NOT EXISTS `indent` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` varchar(50) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `touch_id` int(10) UNSIGNED NOT NULL,
  `book_id` int(10) UNSIGNED NOT NULL,
  `price` float(8,2) UNSIGNED NOT NULL,
  `num` int(10) UNSIGNED NOT NULL,
  `status_id` int(11) NOT NULL DEFAULT '1',
  `confirm` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `paytype` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `posttype` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `touch`
--

DROP TABLE IF EXISTS `touch`;
CREATE TABLE IF NOT EXISTS `touch` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `addr` varchar(100) NOT NULL,
  `postcode` varchar(10) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `touch`
--

INSERT INTO `touch` (`id`, `name`, `addr`, `postcode`, `tel`, `user_id`) VALUES
(1, 'wanguoyu', '北京', '456712', '123555345', 12),
(23, 'txz', '弗雷尔卓德', '456578', '18888888888', 12);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `realname` varchar(20) NOT NULL,
  `img` varchar(100) NOT NULL DEFAULT 'moren.gif',
  `sex` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `realname`, `img`, `sex`) VALUES
(12, 'wanguoyu', '46f94c8de14fb36680850768ff1b7f2a', 'wanguoyu', '15780154311738067753.jpg', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;