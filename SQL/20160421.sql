#UPDATE TABLE tbl_simpanan_detil
---------------------------------------------------
#Done
update tbl_simpanan_detil
set simpanan_id = case
when simpanan_id = 'SP-002' then 'SP-1002'
when simpanan_id = 'SP-003' then 'SP-1003'
end 
where simpanan_id in ('SP-002', 'SP-003');

update tbl_simpanan_detil
set simpanan_id = case
when simpanan_id = 'SP-004' then 'SP-1004'
when simpanan_id = 'SP-005' then 'SP-1005'
when simpanan_id = 'SP-006' then 'SP-1006'
when simpanan_id = 'SP-007' then 'SP-1007'
when simpanan_id = 'SP-008' then 'SP-1008'
when simpanan_id = 'SP-009' then 'SP-1009'
when simpanan_id = 'SP-010' then 'SP-1010'
when simpanan_id = 'SP-011' then 'SP-1011'
when simpanan_id = 'SP-012' then 'SP-1012'
when simpanan_id = 'SP-013' then 'SP-1013'
when simpanan_id = 'SP-014' then 'SP-1014'
when simpanan_id = 'SP-015' then 'SP-1015'
when simpanan_id = 'SP-016' then 'SP-1016'
when simpanan_id = 'SP-017' then 'SP-1017'
when simpanan_id = 'SP-018' then 'SP-1018'
when simpanan_id = 'SP-019' then 'SP-1019'
when simpanan_id = 'SP-020' then 'SP-1020'
when simpanan_id = 'SP-021' then 'SP-1021'
when simpanan_id = 'SP-070' then 'SP-1070'
when simpanan_id = 'SP-022' then 'SP-1022'
when simpanan_id = 'SP-023' then 'SP-1023'
when simpanan_id = 'SP-024' then 'SP-1024'
when simpanan_id = 'SP-025' then 'SP-1025'
when simpanan_id = 'SP-026' then 'SP-1026'
when simpanan_id = 'SP-027' then 'SP-1027'
when simpanan_id = 'SP-028' then 'SP-1028'
when simpanan_id = 'SP-029' then 'SP-1029'
when simpanan_id = 'SP-030' then 'SP-1030'
when simpanan_id = 'SP-031' then 'SP-1031'
when simpanan_id = 'SP-032' then 'SP-1032'
when simpanan_id = 'SP-033' then 'SP-1033'
when simpanan_id = 'SP-035' then 'SP-1035'
when simpanan_id = 'SP-139' then 'SP-1139'
when simpanan_id = 'SP-036' then 'SP-1036'
when simpanan_id = 'SP-037' then 'SP-1037'
when simpanan_id = 'SP-038' then 'SP-1038'
when simpanan_id = 'SP-039' then 'SP-1039'
when simpanan_id = 'SP-040' then 'SP-1040'
when simpanan_id = 'SP-041' then 'SP-1041'
when simpanan_id = 'SP-042' then 'SP-1042'
when simpanan_id = 'SP-043' then 'SP-1043'
when simpanan_id = 'SP-044' then 'SP-1044'
when simpanan_id = 'SP-045' then 'SP-1045'
when simpanan_id = 'SP-046' then 'SP-1046'
when simpanan_id = 'SP-047' then 'SP-1047'
when simpanan_id = 'SP-048' then 'SP-1048'
when simpanan_id = 'SP-064' then 'SP-1064'
when simpanan_id = 'SP-072' then 'SP-1072'
when simpanan_id = 'SP-084' then 'SP-1084'
when simpanan_id = 'SP-091' then 'SP-1091'
when simpanan_id = 'SP-109' then 'SP-1109'
when simpanan_id = 'SP-137' then 'SP-1137'
when simpanan_id = 'SP-118' then 'SP-1118'
when simpanan_id = 'SP-119' then 'SP-1119'
when simpanan_id = 'SP-120' then 'SP-1120'
when simpanan_id = 'SP-131' then 'SP-1131'
end 
where simpanan_id in (
'SP-004', 
'SP-005', 
'SP-006', 
'SP-007', 
'SP-008', 
'SP-009', 
'SP-010', 
'SP-011', 
'SP-012', 
'SP-013', 
'SP-014', 
'SP-015', 
'SP-016', 
'SP-017', 
'SP-018', 
'SP-019', 
'SP-020', 
'SP-021', 
'SP-070', 
'SP-022', 
'SP-023', 
'SP-024', 
'SP-025', 
'SP-026', 
'SP-027', 
'SP-028', 
'SP-029', 
'SP-030', 
'SP-031', 
'SP-032', 
'SP-033', 
'SP-035', 
'SP-139', 
'SP-036', 
'SP-037', 
'SP-038', 
'SP-039', 
'SP-040', 
'SP-041', 
'SP-042', 
'SP-043', 
'SP-044', 
'SP-045', 
'SP-046', 
'SP-047', 
'SP-048', 
'SP-064', 
'SP-072', 
'SP-084', 
'SP-091', 
'SP-109', 
'SP-137', 
'SP-118', 
'SP-119', 
'SP-120', 
'SP-131'
);

#Done
update tbl_simpanan_detil
set simpanan_id = case
when simpanan_id = 'SP-034' then 'SP-1034'
when simpanan_id = 'SP-051' then 'SP-1051'
when simpanan_id = 'SP-059' then 'SP-1059'
when simpanan_id = 'SP-061' then 'SP-1061'
when simpanan_id = 'SP-068' then 'SP-1068'
when simpanan_id = 'SP-073' then 'SP-1073'
when simpanan_id = 'SP-071' then 'SP-1071'
when simpanan_id = 'SP-069' then 'SP-1069'
when simpanan_id = 'SP-074' then 'SP-1074'
when simpanan_id = 'SP-075' then 'SP-1075'
when simpanan_id = 'SP-076' then 'SP-1076'
when simpanan_id = 'SP-077' then 'SP-1077'
when simpanan_id = 'SP-082' then 'SP-1082'
when simpanan_id = 'SP-093' then 'SP-1093'
when simpanan_id = 'SP-092' then 'SP-1092'
when simpanan_id = 'SP-096' then 'SP-1096'
when simpanan_id = 'SP-097' then 'SP-1097'
when simpanan_id = 'SP-116' then 'SP-1116'
when simpanan_id = 'SP-126' then 'SP-1126'
when simpanan_id = 'SP-134' then 'SP-1134'
when simpanan_id = 'SP-132' then 'SP-1132'
when simpanan_id = 'SP-125' then 'SP-1125'
when simpanan_id = 'SP-124' then 'SP-1124'
when simpanan_id = 'SP-123' then 'SP-1123'
when simpanan_id = 'SP-117' then 'SP-1117'
when simpanan_id = 'SP-110' then 'SP-1110'
when simpanan_id = 'SP-107' then 'SP-1107'
end 
where simpanan_id in (
'SP-034', 
'SP-051', 
'SP-059', 
'SP-061', 
'SP-068', 
'SP-073', 
'SP-071', 
'SP-069', 
'SP-074', 
'SP-075', 
'SP-076', 
'SP-077', 
'SP-082', 
'SP-093', 
'SP-092', 
'SP-096', 
'SP-097', 
'SP-116', 
'SP-126', 
'SP-134', 
'SP-132', 
'SP-125', 
'SP-124', 
'SP-123', 
'SP-117', 
'SP-110', 
'SP-107'
);

-----------------------------------------------------------------------------------------
#UPDATE TABLE tbl_simpanan #simpanan_id

update tbl_simpanan
set simpanan_id = case
when simpanan_id = 'SP-034' then 'SP-1034' 
when simpanan_id = 'SP-002' then 'SP-1002' 
when simpanan_id = 'SP-003' then 'SP-1003' 
when simpanan_id = 'SP-004' then 'SP-1004' 
when simpanan_id = 'SP-005' then 'SP-1005' 
when simpanan_id = 'SP-006' then 'SP-1006' 
when simpanan_id = 'SP-007' then 'SP-1007' 
when simpanan_id = 'SP-008' then 'SP-1008' 
when simpanan_id = 'SP-009' then 'SP-1009' 
when simpanan_id = 'SP-010' then 'SP-1010' 
when simpanan_id = 'SP-011' then 'SP-1011' 
when simpanan_id = 'SP-012' then 'SP-1012' 
when simpanan_id = 'SP-013' then 'SP-1013' 
when simpanan_id = 'SP-014' then 'SP-1014' 
when simpanan_id = 'SP-015' then 'SP-1015' 
when simpanan_id = 'SP-016' then 'SP-1016' 
when simpanan_id = 'SP-017' then 'SP-1017' 
when simpanan_id = 'SP-018' then 'SP-1018' 
when simpanan_id = 'SP-019' then 'SP-1019' 
when simpanan_id = 'SP-020' then 'SP-1020' 
when simpanan_id = 'SP-021' then 'SP-1021' 
when simpanan_id = 'SP-022' then 'SP-1022' 
when simpanan_id = 'SP-023' then 'SP-1023' 
when simpanan_id = 'SP-024' then 'SP-1024' 
when simpanan_id = 'SP-025' then 'SP-1025' 
when simpanan_id = 'SP-026' then 'SP-1026' 
when simpanan_id = 'SP-027' then 'SP-1027' 
when simpanan_id = 'SP-028' then 'SP-1028' 
when simpanan_id = 'SP-029' then 'SP-1029' 
when simpanan_id = 'SP-030' then 'SP-1030' 
when simpanan_id = 'SP-031' then 'SP-1031' 
when simpanan_id = 'SP-032' then 'SP-1032' 
when simpanan_id = 'SP-033' then 'SP-1033' 
when simpanan_id = 'SP-034' then 'SP-1034' 
when simpanan_id = 'SP-035' then 'SP-1035' 
when simpanan_id = 'SP-036' then 'SP-1036' 
when simpanan_id = 'SP-037' then 'SP-1037' 
when simpanan_id = 'SP-038' then 'SP-1038' 
when simpanan_id = 'SP-039' then 'SP-1039' 
when simpanan_id = 'SP-040' then 'SP-1040' 
when simpanan_id = 'SP-041' then 'SP-1041' 
when simpanan_id = 'SP-042' then 'SP-1042' 
when simpanan_id = 'SP-043' then 'SP-1043' 
when simpanan_id = 'SP-044' then 'SP-1044' 
when simpanan_id = 'SP-045' then 'SP-1045' 
when simpanan_id = 'SP-046' then 'SP-1046' 
when simpanan_id = 'SP-047' then 'SP-1047' 
when simpanan_id = 'SP-048' then 'SP-1048' 
when simpanan_id = 'SP-060' then 'SP-1060' 
when simpanan_id = 'SP-050' then 'SP-1050' 
when simpanan_id = 'SP-051' then 'SP-1051' 
when simpanan_id = 'SP-052' then 'SP-1052' 
when simpanan_id = 'SP-053' then 'SP-1053' 
when simpanan_id = 'SP-054' then 'SP-1054' 
when simpanan_id = 'SP-055' then 'SP-1055' 
when simpanan_id = 'SP-056' then 'SP-1056' 
when simpanan_id = 'SP-057' then 'SP-1057' 
when simpanan_id = 'SP-058' then 'SP-1058' 
when simpanan_id = 'SP-059' then 'SP-1059' 
when simpanan_id = 'SP-061' then 'SP-1061' 
when simpanan_id = 'SP-062' then 'SP-1062' 
when simpanan_id = 'SP-063' then 'SP-1063' 
when simpanan_id = 'SP-064' then 'SP-1064' 
when simpanan_id = 'SP-065' then 'SP-1065' 
when simpanan_id = 'SP-066' then 'SP-1066' 
when simpanan_id = 'SP-067' then 'SP-1067' 
when simpanan_id = 'SP-068' then 'SP-1068' 
when simpanan_id = 'SP-069' then 'SP-1069' 
when simpanan_id = 'SP-070' then 'SP-1070' 
when simpanan_id = 'SP-071' then 'SP-1071' 
when simpanan_id = 'SP-072' then 'SP-1072' 
when simpanan_id = 'SP-073' then 'SP-1073' 
when simpanan_id = 'SP-074' then 'SP-1074' 
when simpanan_id = 'SP-075' then 'SP-1075' 
when simpanan_id = 'SP-076' then 'SP-1076' 
when simpanan_id = 'SP-077' then 'SP-1077' 
when simpanan_id = 'SP-078' then 'SP-1078' 
when simpanan_id = 'SP-079' then 'SP-1079' 
when simpanan_id = 'SP-080' then 'SP-1080' 
when simpanan_id = 'SP-081' then 'SP-1081' 
when simpanan_id = 'SP-082' then 'SP-1082' 
when simpanan_id = 'SP-083' then 'SP-1083' 
when simpanan_id = 'SP-084' then 'SP-1084' 
when simpanan_id = 'SP-085' then 'SP-1085' 
when simpanan_id = 'SP-086' then 'SP-1086' 
when simpanan_id = 'SP-087' then 'SP-1087' 
when simpanan_id = 'SP-088' then 'SP-1088' 
when simpanan_id = 'SP-089' then 'SP-1089' 
when simpanan_id = 'SP-090' then 'SP-1090' 
when simpanan_id = 'SP-091' then 'SP-1091' 
when simpanan_id = 'SP-092' then 'SP-1092' 
when simpanan_id = 'SP-093' then 'SP-1093' 
when simpanan_id = 'SP-094' then 'SP-1094' 
when simpanan_id = 'SP-095' then 'SP-1095' 
when simpanan_id = 'SP-096' then 'SP-1096' 
when simpanan_id = 'SP-097' then 'SP-1097' 
when simpanan_id = 'SP-098' then 'SP-1098' 
when simpanan_id = 'SP-099' then 'SP-1099' 
when simpanan_id = 'SP-100' then 'SP-1100' 
when simpanan_id = 'SP-101' then 'SP-1101' 
when simpanan_id = 'SP-102' then 'SP-1102' 
when simpanan_id = 'SP-103' then 'SP-1103' 
when simpanan_id = 'SP-104' then 'SP-1104' 
when simpanan_id = 'SP-105' then 'SP-1105' 
when simpanan_id = 'SP-106' then 'SP-1106' 
when simpanan_id = 'SP-107' then 'SP-1107' 
when simpanan_id = 'SP-108' then 'SP-1108' 
when simpanan_id = 'SP-109' then 'SP-1109' 
when simpanan_id = 'SP-110' then 'SP-1110' 
when simpanan_id = 'SP-111' then 'SP-1111' 
when simpanan_id = 'SP-112' then 'SP-1112' 
when simpanan_id = 'SP-113' then 'SP-1113' 
when simpanan_id = 'SP-114' then 'SP-1114' 
when simpanan_id = 'SP-115' then 'SP-1115' 
when simpanan_id = 'SP-116' then 'SP-1116' 
when simpanan_id = 'SP-117' then 'SP-1117' 
when simpanan_id = 'SP-118' then 'SP-1118' 
when simpanan_id = 'SP-119' then 'SP-1119' 
when simpanan_id = 'SP-120' then 'SP-1120' 
when simpanan_id = 'SP-121' then 'SP-1121' 
when simpanan_id = 'SP-122' then 'SP-1122' 
when simpanan_id = 'SP-123' then 'SP-1123' 
when simpanan_id = 'SP-124' then 'SP-1124' 
when simpanan_id = 'SP-125' then 'SP-1125' 
when simpanan_id = 'SP-126' then 'SP-1126' 
when simpanan_id = 'SP-127' then 'SP-1127' 
when simpanan_id = 'SP-128' then 'SP-1128' 
when simpanan_id = 'SP-129' then 'SP-1129' 
when simpanan_id = 'SP-130' then 'SP-1130' 
when simpanan_id = 'SP-131' then 'SP-1131' 
when simpanan_id = 'SP-132' then 'SP-1132' 
when simpanan_id = 'SP-133' then 'SP-1133' 
when simpanan_id = 'SP-134' then 'SP-1134' 
when simpanan_id = 'SP-135' then 'SP-1135' 
when simpanan_id = 'SP-136' then 'SP-1136' 
when simpanan_id = 'SP-137' then 'SP-1137' 
when simpanan_id = 'SP-138' then 'SP-1138' 
when simpanan_id = 'SP-139' then 'SP-1139' 
when simpanan_id = 'SP-140' then 'SP-1140' 
when simpanan_id = 'SP-141' then 'SP-1141' 
when simpanan_id = 'SP-142' then 'SP-1142' 
when simpanan_id = 'SP-143' then 'SP-1143' 
when simpanan_id = 'SP-144' then 'SP-1144' 
end 
where simpanan_id in (
'SP-034', 
'SP-002', 
'SP-003', 
'SP-004', 
'SP-005', 
'SP-006', 
'SP-007', 
'SP-008', 
'SP-009', 
'SP-010', 
'SP-011', 
'SP-012', 
'SP-013', 
'SP-014', 
'SP-015', 
'SP-016', 
'SP-017', 
'SP-018', 
'SP-019', 
'SP-020', 
'SP-021', 
'SP-022', 
'SP-023', 
'SP-024', 
'SP-025', 
'SP-026', 
'SP-027', 
'SP-028', 
'SP-029', 
'SP-030', 
'SP-031', 
'SP-032', 
'SP-033', 
'SP-034', 
'SP-035', 
'SP-036', 
'SP-037', 
'SP-038', 
'SP-039', 
'SP-040', 
'SP-041', 
'SP-042', 
'SP-043', 
'SP-044', 
'SP-045', 
'SP-046', 
'SP-047', 
'SP-048', 
'SP-060', 
'SP-050', 
'SP-051', 
'SP-052', 
'SP-053', 
'SP-054', 
'SP-055', 
'SP-056', 
'SP-057', 
'SP-058', 
'SP-059', 
'SP-061', 
'SP-062', 
'SP-063', 
'SP-064', 
'SP-065', 
'SP-066', 
'SP-067', 
'SP-068', 
'SP-069', 
'SP-070', 
'SP-071', 
'SP-072', 
'SP-073', 
'SP-074', 
'SP-075', 
'SP-076', 
'SP-077', 
'SP-078', 
'SP-079', 
'SP-080', 
'SP-081', 
'SP-082', 
'SP-083', 
'SP-084', 
'SP-085', 
'SP-086', 
'SP-087', 
'SP-088', 
'SP-089', 
'SP-090', 
'SP-091', 
'SP-092', 
'SP-093', 
'SP-094', 
'SP-095', 
'SP-096', 
'SP-097', 
'SP-098', 
'SP-099', 
'SP-100', 
'SP-101', 
'SP-102', 
'SP-103', 
'SP-104', 
'SP-105', 
'SP-106', 
'SP-107', 
'SP-108', 
'SP-109', 
'SP-110', 
'SP-111', 
'SP-112', 
'SP-113', 
'SP-114', 
'SP-115', 
'SP-116', 
'SP-117', 
'SP-118', 
'SP-119', 
'SP-120', 
'SP-121', 
'SP-122', 
'SP-123', 
'SP-124', 
'SP-125', 
'SP-126', 
'SP-127', 
'SP-128', 
'SP-129', 
'SP-130', 
'SP-131', 
'SP-132', 
'SP-133', 
'SP-134', 
'SP-135', 
'SP-136', 
'SP-137', 
'SP-138', 
'SP-139', 
'SP-140', 
'SP-141', 
'SP-142', 
'SP-143', 
'SP-144'
);

---------------------------------------------------------------------------------

#UPDATE TABLE tbl_simpanan #anggota_id
update tbl_simpanan
set anggota_id = case 
when anggota_id = 'AG-034' then 'AG-1034' 
when anggota_id = 'AG-002' then 'AG-1002' 
when anggota_id = 'AG-003' then 'AG-1003' 
when anggota_id = 'AG-004' then 'AG-1004' 
when anggota_id = 'AG-005' then 'AG-1005' 
when anggota_id = 'AG-006' then 'AG-1006' 
when anggota_id = 'AG-007' then 'AG-1007' 
when anggota_id = 'AG-008' then 'AG-1008' 
when anggota_id = 'AG-009' then 'AG-1009' 
when anggota_id = 'AG-010' then 'AG-1010' 
when anggota_id = 'AG-011' then 'AG-1011' 
when anggota_id = 'AG-012' then 'AG-1012' 
when anggota_id = 'AG-013' then 'AG-1013' 
when anggota_id = 'AG-014' then 'AG-1014' 
when anggota_id = 'AG-015' then 'AG-1015' 
when anggota_id = 'AG-016' then 'AG-1016' 
when anggota_id = 'AG-017' then 'AG-1017' 
when anggota_id = 'AG-018' then 'AG-1018' 
when anggota_id = 'AG-019' then 'AG-1019' 
when anggota_id = 'AG-020' then 'AG-1020' 
when anggota_id = 'AG-021' then 'AG-1021' 
when anggota_id = 'AG-022' then 'AG-1022' 
when anggota_id = 'AG-023' then 'AG-1023' 
when anggota_id = 'AG-024' then 'AG-1024' 
when anggota_id = 'AG-025' then 'AG-1025' 
when anggota_id = 'AG-026' then 'AG-1026' 
when anggota_id = 'AG-027' then 'AG-1027' 
when anggota_id = 'AG-028' then 'AG-1028' 
when anggota_id = 'AG-029' then 'AG-1029' 
when anggota_id = 'AG-030' then 'AG-1030' 
when anggota_id = 'AG-031' then 'AG-1031' 
when anggota_id = 'AG-032' then 'AG-1032' 
when anggota_id = 'AG-033' then 'AG-1033' 
when anggota_id = 'AG-035' then 'AG-1035' 
when anggota_id = 'AG-036' then 'AG-1036' 
when anggota_id = 'AG-037' then 'AG-1037' 
when anggota_id = 'AG-038' then 'AG-1038' 
when anggota_id = 'AG-039' then 'AG-1039' 
when anggota_id = 'AG-040' then 'AG-1040' 
when anggota_id = 'AG-041' then 'AG-1041' 
when anggota_id = 'AG-042' then 'AG-1042' 
when anggota_id = 'AG-043' then 'AG-1043' 
when anggota_id = 'AG-044' then 'AG-1044' 
when anggota_id = 'AG-045' then 'AG-1045' 
when anggota_id = 'AG-046' then 'AG-1046' 
when anggota_id = 'AG-047' then 'AG-1047' 
when anggota_id = 'AG-048' then 'AG-1048' 
when anggota_id = 'AG-060' then 'AG-1060' 
when anggota_id = 'AG-050' then 'AG-1050' 
when anggota_id = 'AG-051' then 'AG-1051' 
when anggota_id = 'AG-052' then 'AG-1052' 
when anggota_id = 'AG-053' then 'AG-1053' 
when anggota_id = 'AG-054' then 'AG-1054' 
when anggota_id = 'AG-055' then 'AG-1055' 
when anggota_id = 'AG-056' then 'AG-1056' 
when anggota_id = 'AG-057' then 'AG-1057' 
when anggota_id = 'AG-058' then 'AG-1058' 
when anggota_id = 'AG-059' then 'AG-1059' 
when anggota_id = 'AG-061' then 'AG-1061' 
when anggota_id = 'AG-062' then 'AG-1062' 
when anggota_id = 'AG-063' then 'AG-1063' 
when anggota_id = 'AG-064' then 'AG-1064' 
when anggota_id = 'AG-065' then 'AG-1065' 
when anggota_id = 'AG-066' then 'AG-1066' 
when anggota_id = 'AG-067' then 'AG-1067' 
when anggota_id = 'AG-068' then 'AG-1068' 
when anggota_id = 'AG-069' then 'AG-1069' 
when anggota_id = 'AG-070' then 'AG-1070' 
when anggota_id = 'AG-071' then 'AG-1071' 
when anggota_id = 'AG-072' then 'AG-1072' 
when anggota_id = 'AG-073' then 'AG-1073' 
when anggota_id = 'AG-074' then 'AG-1074' 
when anggota_id = 'AG-075' then 'AG-1075' 
when anggota_id = 'AG-076' then 'AG-1076' 
when anggota_id = 'AG-077' then 'AG-1077' 
when anggota_id = 'AG-078' then 'AG-1078' 
when anggota_id = 'AG-079' then 'AG-1079' 
when anggota_id = 'AG-080' then 'AG-1080' 
when anggota_id = 'AG-081' then 'AG-1081' 
when anggota_id = 'AG-082' then 'AG-1082' 
when anggota_id = 'AG-083' then 'AG-1083' 
when anggota_id = 'AG-084' then 'AG-1084' 
when anggota_id = 'AG-085' then 'AG-1085' 
when anggota_id = 'AG-086' then 'AG-1086' 
when anggota_id = 'AG-087' then 'AG-1087' 
when anggota_id = 'AG-088' then 'AG-1088' 
when anggota_id = 'AG-089' then 'AG-1089' 
when anggota_id = 'AG-090' then 'AG-1090' 
when anggota_id = 'AG-091' then 'AG-1091' 
when anggota_id = 'AG-092' then 'AG-1092' 
when anggota_id = 'AG-093' then 'AG-1093' 
when anggota_id = 'AG-094' then 'AG-1094' 
when anggota_id = 'AG-095' then 'AG-1095' 
when anggota_id = 'AG-096' then 'AG-1096' 
when anggota_id = 'AG-097' then 'AG-1097' 
when anggota_id = 'AG-098' then 'AG-1098' 
when anggota_id = 'AG-099' then 'AG-1099' 
when anggota_id = 'AG-100' then 'AG-1100' 
when anggota_id = 'AG-101' then 'AG-1101' 
when anggota_id = 'AG-102' then 'AG-1102' 
when anggota_id = 'AG-103' then 'AG-1103' 
when anggota_id = 'AG-104' then 'AG-1104' 
when anggota_id = 'AG-105' then 'AG-1105' 
when anggota_id = 'AG-106' then 'AG-1106' 
when anggota_id = 'AG-107' then 'AG-1107' 
when anggota_id = 'AG-108' then 'AG-1108' 
when anggota_id = 'AG-109' then 'AG-1109' 
when anggota_id = 'AG-110' then 'AG-1110' 
when anggota_id = 'AG-111' then 'AG-1111' 
when anggota_id = 'AG-112' then 'AG-1112' 
when anggota_id = 'AG-113' then 'AG-1113' 
when anggota_id = 'AG-114' then 'AG-1114' 
when anggota_id = 'AG-115' then 'AG-1115' 
when anggota_id = 'AG-116' then 'AG-1116' 
when anggota_id = 'AG-117' then 'AG-1117' 
when anggota_id = 'AG-118' then 'AG-1118' 
when anggota_id = 'AG-119' then 'AG-1119' 
when anggota_id = 'AG-120' then 'AG-1120' 
when anggota_id = 'AG-121' then 'AG-1121' 
when anggota_id = 'AG-122' then 'AG-1122' 
when anggota_id = 'AG-123' then 'AG-1123' 
when anggota_id = 'AG-124' then 'AG-1124' 
when anggota_id = 'AG-125' then 'AG-1125' 
when anggota_id = 'AG-126' then 'AG-1126' 
when anggota_id = 'AG-127' then 'AG-1127' 
when anggota_id = 'AG-128' then 'AG-1128' 
when anggota_id = 'AG-129' then 'AG-1129' 
when anggota_id = 'AG-130' then 'AG-1130' 
when anggota_id = 'AG-131' then 'AG-1131' 
when anggota_id = 'AG-132' then 'AG-1132' 
when anggota_id = 'AG-133' then 'AG-1133' 
when anggota_id = 'AG-134' then 'AG-1134' 
when anggota_id = 'AG-135' then 'AG-1135' 
when anggota_id = 'AG-136' then 'AG-1136' 
when anggota_id = 'AG-137' then 'AG-1137' 
when anggota_id = 'AG-138' then 'AG-1138' 
when anggota_id = 'AG-139' then 'AG-1139' 
when anggota_id = 'AG-140' then 'AG-1140' 
when anggota_id = 'AG-141' then 'AG-1141' 
when anggota_id = 'AG-142' then 'AG-1142' 
when anggota_id = 'AG-143' then 'AG-1143' 
when anggota_id = 'AG-144' then 'AG-1144'  
end 
where anggota_id in (
'AG-034', 
'AG-002', 
'AG-003', 
'AG-004', 
'AG-005', 
'AG-006', 
'AG-007', 
'AG-008', 
'AG-009', 
'AG-010', 
'AG-011', 
'AG-012', 
'AG-013', 
'AG-014', 
'AG-015', 
'AG-016', 
'AG-017', 
'AG-018', 
'AG-019', 
'AG-020', 
'AG-021', 
'AG-022', 
'AG-023', 
'AG-024', 
'AG-025', 
'AG-026', 
'AG-027', 
'AG-028', 
'AG-029', 
'AG-030', 
'AG-031', 
'AG-032', 
'AG-033', 
'AG-035', 
'AG-036', 
'AG-037', 
'AG-038', 
'AG-039', 
'AG-040', 
'AG-041', 
'AG-042', 
'AG-043', 
'AG-044', 
'AG-045', 
'AG-046', 
'AG-047', 
'AG-048', 
'AG-060', 
'AG-050', 
'AG-051', 
'AG-052', 
'AG-053', 
'AG-054', 
'AG-055', 
'AG-056', 
'AG-057', 
'AG-058', 
'AG-059', 
'AG-061', 
'AG-062', 
'AG-063', 
'AG-064', 
'AG-065', 
'AG-066', 
'AG-067', 
'AG-068', 
'AG-069', 
'AG-070', 
'AG-071', 
'AG-072', 
'AG-073', 
'AG-074', 
'AG-075', 
'AG-076', 
'AG-077', 
'AG-078', 
'AG-079', 
'AG-080', 
'AG-081', 
'AG-082', 
'AG-083', 
'AG-084', 
'AG-085', 
'AG-086', 
'AG-087', 
'AG-088', 
'AG-089', 
'AG-090', 
'AG-091', 
'AG-092', 
'AG-093', 
'AG-094', 
'AG-095', 
'AG-096', 
'AG-097', 
'AG-098', 
'AG-099', 
'AG-100', 
'AG-101', 
'AG-102', 
'AG-103', 
'AG-104', 
'AG-105', 
'AG-106', 
'AG-107', 
'AG-108', 
'AG-109', 
'AG-110', 
'AG-111', 
'AG-112', 
'AG-113', 
'AG-114', 
'AG-115', 
'AG-116', 
'AG-117', 
'AG-118', 
'AG-119', 
'AG-120', 
'AG-121', 
'AG-122', 
'AG-123', 
'AG-124', 
'AG-125', 
'AG-126', 
'AG-127', 
'AG-128', 
'AG-129', 
'AG-130', 
'AG-131', 
'AG-132', 
'AG-133', 
'AG-134', 
'AG-135', 
'AG-136', 
'AG-137', 
'AG-138', 
'AG-139', 
'AG-140', 
'AG-141', 
'AG-142', 
'AG-143', 
'AG-144' 
);


---------------------------------------------------------------
#UPDATE TABLE tbl_penarikan

update tbl_penarikan
set simpanan_id = case
when simpanan_id = 'SP-003' then 'SP-1003' 
when simpanan_id = 'SP-004' then 'SP-1004' 
when simpanan_id = 'SP-005' then 'SP-1005' 
when simpanan_id = 'SP-011' then 'SP-1011' 
when simpanan_id = 'SP-016' then 'SP-1016' 
when simpanan_id = 'SP-018' then 'SP-1018' 
when simpanan_id = 'SP-020' then 'SP-1020' 
when simpanan_id = 'SP-021' then 'SP-1021' 
when simpanan_id = 'SP-023' then 'SP-1023' 
when simpanan_id = 'SP-024' then 'SP-1024' 
when simpanan_id = 'SP-025' then 'SP-1025' 
when simpanan_id = 'SP-027' then 'SP-1027' 
when simpanan_id = 'SP-031' then 'SP-1031' 
when simpanan_id = 'SP-033' then 'SP-1033' 
when simpanan_id = 'SP-036' then 'SP-1036' 
when simpanan_id = 'SP-037' then 'SP-1037' 
when simpanan_id = 'SP-038' then 'SP-1038' 
when simpanan_id = 'SP-039' then 'SP-1039' 
when simpanan_id = 'SP-040' then 'SP-1040' 
when simpanan_id = 'SP-041' then 'SP-1041' 
when simpanan_id = 'SP-042' then 'SP-1042' 
when simpanan_id = 'SP-043' then 'SP-1043' 
when simpanan_id = 'SP-044' then 'SP-1044' 
when simpanan_id = 'SP-046' then 'SP-1046' 
when simpanan_id = 'SP-091' then 'SP-1091' 
when simpanan_id = 'SP-119' then 'SP-1119'
when simpanan_id = 'SP-059' then 'SP-1059' 
when simpanan_id = 'SP-061' then 'SP-1061'
when simpanan_id = 'SP-071' then 'SP-1071'
when simpanan_id = 'SP-069' then 'SP-1069'
when simpanan_id = 'SP-074' then 'SP-1074'
when simpanan_id = 'SP-075' then 'SP-1075'
when simpanan_id = 'SP-093' then 'SP-1093'
when simpanan_id = 'SP-116' then 'SP-1116'
when simpanan_id = 'SP-126' then 'SP-1126'
when simpanan_id = 'SP-134' then 'SP-1134'
when simpanan_id = 'SP-110' then 'SP-1110'
when simpanan_id = 'SP-107' then 'SP-1107'
end 
where simpanan_id in (
'SP-003', 
'SP-004', 
'SP-005', 
'SP-011', 
'SP-016', 
'SP-018', 
'SP-020', 
'SP-021', 
'SP-023', 
'SP-024', 
'SP-025', 
'SP-027', 
'SP-031', 
'SP-033', 
'SP-036', 
'SP-037', 
'SP-038', 
'SP-039', 
'SP-040', 
'SP-041', 
'SP-042', 
'SP-043', 
'SP-044', 
'SP-046', 
'SP-091', 
'SP-119',
'SP-059', 
'SP-061', 
'SP-071', 
'SP-069', 
'SP-074', 
'SP-075', 
'SP-093', 
'SP-116', 
'SP-126', 
'SP-134', 
'SP-110', 
'SP-107' 
);

------------------------------------------------------------------
#UPDATE TABLE tbl_anggota

update tbl_anggota 
set anggota_id = case
when anggota_id = 'AG-034' then 'AG-1034' 
when anggota_id = 'AG-002' then 'AG-1002' 
when anggota_id = 'AG-003' then 'AG-1003' 
when anggota_id = 'AG-004' then 'AG-1004' 
when anggota_id = 'AG-005' then 'AG-1005' 
when anggota_id = 'AG-006' then 'AG-1006' 
when anggota_id = 'AG-007' then 'AG-1007' 
when anggota_id = 'AG-008' then 'AG-1008' 
when anggota_id = 'AG-009' then 'AG-1009' 
when anggota_id = 'AG-010' then 'AG-1010' 
when anggota_id = 'AG-011' then 'AG-1011' 
when anggota_id = 'AG-012' then 'AG-1012' 
when anggota_id = 'AG-013' then 'AG-1013' 
when anggota_id = 'AG-014' then 'AG-1014' 
when anggota_id = 'AG-015' then 'AG-1015' 
when anggota_id = 'AG-016' then 'AG-1016' 
when anggota_id = 'AG-017' then 'AG-1017' 
when anggota_id = 'AG-018' then 'AG-1018' 
when anggota_id = 'AG-019' then 'AG-1019' 
when anggota_id = 'AG-020' then 'AG-1020' 
when anggota_id = 'AG-021' then 'AG-1021' 
when anggota_id = 'AG-022' then 'AG-1022' 
when anggota_id = 'AG-023' then 'AG-1023' 
when anggota_id = 'AG-024' then 'AG-1024' 
when anggota_id = 'AG-025' then 'AG-1025' 
when anggota_id = 'AG-026' then 'AG-1026' 
when anggota_id = 'AG-027' then 'AG-1027' 
when anggota_id = 'AG-028' then 'AG-1028' 
when anggota_id = 'AG-029' then 'AG-1029' 
when anggota_id = 'AG-030' then 'AG-1030' 
when anggota_id = 'AG-031' then 'AG-1031' 
when anggota_id = 'AG-032' then 'AG-1032' 
when anggota_id = 'AG-033' then 'AG-1033' 
when anggota_id = 'AG-035' then 'AG-1035' 
when anggota_id = 'AG-036' then 'AG-1036' 
when anggota_id = 'AG-037' then 'AG-1037' 
when anggota_id = 'AG-038' then 'AG-1038' 
when anggota_id = 'AG-039' then 'AG-1039' 
when anggota_id = 'AG-040' then 'AG-1040' 
when anggota_id = 'AG-041' then 'AG-1041' 
when anggota_id = 'AG-042' then 'AG-1042' 
when anggota_id = 'AG-043' then 'AG-1043' 
when anggota_id = 'AG-044' then 'AG-1044' 
when anggota_id = 'AG-045' then 'AG-1045' 
when anggota_id = 'AG-046' then 'AG-1046' 
when anggota_id = 'AG-047' then 'AG-1047' 
when anggota_id = 'AG-048' then 'AG-1048' 
when anggota_id = 'AG-060' then 'AG-1060' 
when anggota_id = 'AG-050' then 'AG-1050' 
when anggota_id = 'AG-051' then 'AG-1051' 
when anggota_id = 'AG-052' then 'AG-1052' 
when anggota_id = 'AG-053' then 'AG-1053' 
when anggota_id = 'AG-054' then 'AG-1054' 
when anggota_id = 'AG-055' then 'AG-1055' 
when anggota_id = 'AG-056' then 'AG-1056' 
when anggota_id = 'AG-057' then 'AG-1057' 
when anggota_id = 'AG-058' then 'AG-1058' 
when anggota_id = 'AG-059' then 'AG-1059' 
when anggota_id = 'AG-061' then 'AG-1061' 
when anggota_id = 'AG-062' then 'AG-1062' 
when anggota_id = 'AG-063' then 'AG-1063' 
when anggota_id = 'AG-064' then 'AG-1064' 
when anggota_id = 'AG-065' then 'AG-1065' 
when anggota_id = 'AG-066' then 'AG-1066' 
when anggota_id = 'AG-067' then 'AG-1067' 
when anggota_id = 'AG-068' then 'AG-1068' 
when anggota_id = 'AG-069' then 'AG-1069' 
when anggota_id = 'AG-070' then 'AG-1070' 
when anggota_id = 'AG-071' then 'AG-1071' 
when anggota_id = 'AG-072' then 'AG-1072' 
when anggota_id = 'AG-073' then 'AG-1073' 
when anggota_id = 'AG-074' then 'AG-1074' 
when anggota_id = 'AG-075' then 'AG-1075' 
when anggota_id = 'AG-076' then 'AG-1076' 
when anggota_id = 'AG-077' then 'AG-1077' 
when anggota_id = 'AG-078' then 'AG-1078' 
when anggota_id = 'AG-079' then 'AG-1079' 
when anggota_id = 'AG-080' then 'AG-1080' 
when anggota_id = 'AG-081' then 'AG-1081' 
when anggota_id = 'AG-082' then 'AG-1082' 
when anggota_id = 'AG-083' then 'AG-1083' 
when anggota_id = 'AG-084' then 'AG-1084' 
when anggota_id = 'AG-085' then 'AG-1085' 
when anggota_id = 'AG-086' then 'AG-1086' 
when anggota_id = 'AG-087' then 'AG-1087' 
when anggota_id = 'AG-088' then 'AG-1088' 
when anggota_id = 'AG-089' then 'AG-1089' 
when anggota_id = 'AG-090' then 'AG-1090' 
when anggota_id = 'AG-091' then 'AG-1091' 
when anggota_id = 'AG-092' then 'AG-1092' 
when anggota_id = 'AG-093' then 'AG-1093' 
when anggota_id = 'AG-094' then 'AG-1094' 
when anggota_id = 'AG-095' then 'AG-1095' 
when anggota_id = 'AG-096' then 'AG-1096' 
when anggota_id = 'AG-097' then 'AG-1097' 
when anggota_id = 'AG-098' then 'AG-1098' 
when anggota_id = 'AG-099' then 'AG-1099' 
when anggota_id = 'AG-100' then 'AG-1100' 
when anggota_id = 'AG-101' then 'AG-1101' 
when anggota_id = 'AG-102' then 'AG-1102' 
when anggota_id = 'AG-103' then 'AG-1103' 
when anggota_id = 'AG-104' then 'AG-1104' 
when anggota_id = 'AG-105' then 'AG-1105' 
when anggota_id = 'AG-106' then 'AG-1106' 
when anggota_id = 'AG-107' then 'AG-1107' 
when anggota_id = 'AG-108' then 'AG-1108' 
when anggota_id = 'AG-109' then 'AG-1109' 
when anggota_id = 'AG-110' then 'AG-1110' 
when anggota_id = 'AG-111' then 'AG-1111' 
when anggota_id = 'AG-112' then 'AG-1112' 
when anggota_id = 'AG-113' then 'AG-1113' 
when anggota_id = 'AG-114' then 'AG-1114' 
when anggota_id = 'AG-115' then 'AG-1115' 
when anggota_id = 'AG-116' then 'AG-1116' 
when anggota_id = 'AG-117' then 'AG-1117' 
when anggota_id = 'AG-118' then 'AG-1118' 
when anggota_id = 'AG-119' then 'AG-1119' 
when anggota_id = 'AG-120' then 'AG-1120' 
when anggota_id = 'AG-121' then 'AG-1121' 
when anggota_id = 'AG-122' then 'AG-1122' 
when anggota_id = 'AG-123' then 'AG-1123' 
when anggota_id = 'AG-124' then 'AG-1124' 
when anggota_id = 'AG-125' then 'AG-1125' 
when anggota_id = 'AG-126' then 'AG-1126' 
when anggota_id = 'AG-127' then 'AG-1127' 
when anggota_id = 'AG-128' then 'AG-1128' 
when anggota_id = 'AG-129' then 'AG-1129' 
when anggota_id = 'AG-130' then 'AG-1130' 
when anggota_id = 'AG-131' then 'AG-1131' 
when anggota_id = 'AG-132' then 'AG-1132' 
when anggota_id = 'AG-133' then 'AG-1133' 
when anggota_id = 'AG-134' then 'AG-1134' 
when anggota_id = 'AG-135' then 'AG-1135' 
when anggota_id = 'AG-136' then 'AG-1136' 
when anggota_id = 'AG-137' then 'AG-1137' 
when anggota_id = 'AG-138' then 'AG-1138' 
when anggota_id = 'AG-139' then 'AG-1139' 
when anggota_id = 'AG-140' then 'AG-1140' 
when anggota_id = 'AG-141' then 'AG-1141' 
when anggota_id = 'AG-142' then 'AG-1142' 
when anggota_id = 'AG-143' then 'AG-1143' 
when anggota_id = 'AG-144' then 'AG-1144'  
end 
where anggota_id in (
'AG-034', 
'AG-002', 
'AG-003', 
'AG-004', 
'AG-005', 
'AG-006', 
'AG-007', 
'AG-008', 
'AG-009', 
'AG-010', 
'AG-011', 
'AG-012', 
'AG-013', 
'AG-014', 
'AG-015', 
'AG-016', 
'AG-017', 
'AG-018', 
'AG-019', 
'AG-020', 
'AG-021', 
'AG-022', 
'AG-023', 
'AG-024', 
'AG-025', 
'AG-026', 
'AG-027', 
'AG-028', 
'AG-029', 
'AG-030', 
'AG-031', 
'AG-032', 
'AG-033', 
'AG-035', 
'AG-036', 
'AG-037', 
'AG-038', 
'AG-039', 
'AG-040', 
'AG-041', 
'AG-042', 
'AG-043', 
'AG-044', 
'AG-045', 
'AG-046', 
'AG-047', 
'AG-048', 
'AG-060', 
'AG-050', 
'AG-051', 
'AG-052', 
'AG-053', 
'AG-054', 
'AG-055', 
'AG-056', 
'AG-057', 
'AG-058', 
'AG-059', 
'AG-061', 
'AG-062', 
'AG-063', 
'AG-064', 
'AG-065', 
'AG-066', 
'AG-067', 
'AG-068', 
'AG-069', 
'AG-070', 
'AG-071', 
'AG-072', 
'AG-073', 
'AG-074', 
'AG-075', 
'AG-076', 
'AG-077', 
'AG-078', 
'AG-079', 
'AG-080', 
'AG-081', 
'AG-082', 
'AG-083', 
'AG-084', 
'AG-085', 
'AG-086', 
'AG-087', 
'AG-088', 
'AG-089', 
'AG-090', 
'AG-091', 
'AG-092', 
'AG-093', 
'AG-094', 
'AG-095', 
'AG-096', 
'AG-097', 
'AG-098', 
'AG-099', 
'AG-100', 
'AG-101', 
'AG-102', 
'AG-103', 
'AG-104', 
'AG-105', 
'AG-106', 
'AG-107', 
'AG-108', 
'AG-109', 
'AG-110', 
'AG-111', 
'AG-112', 
'AG-113', 
'AG-114', 
'AG-115', 
'AG-116', 
'AG-117', 
'AG-118', 
'AG-119', 
'AG-120', 
'AG-121', 
'AG-122', 
'AG-123', 
'AG-124', 
'AG-125', 
'AG-126', 
'AG-127', 
'AG-128', 
'AG-129', 
'AG-130', 
'AG-131', 
'AG-132', 
'AG-133', 
'AG-134', 
'AG-135', 
'AG-136', 
'AG-137', 
'AG-138', 
'AG-139', 
'AG-140', 
'AG-141', 
'AG-142', 
'AG-143', 
'AG-144' 
);
------------------------------------------------------------------------------
#UPDATE DATA ANGGOTA 
-- AG-002 (suwedi) -> AG-004

-- update tbl_simpanan_detil #simpanan_id
update tbl_simpanan_detil
set simpanan_id = case
when simpanan_id = 'SP-1002' then 'SP-004'
end 
where simpanan_id in (
'SP-1002'
);


-- update tbl_simpanan #simpanan_id
update tbl_simpanan 
set simpanan_id = case
when simpanan_id = 'SP-1002' then 'SP-004'
end 
where simpanan_id in (
'SP-1002'
);


-- update tbl_simpanan #anggota_id 
update tbl_simpanan 
set anggota_id = case
when anggota_id = 'AG-1002' then 'AG-004'
end 
where anggota_id in (
'AG-1002'
);

-- update tbl_anggota #anggota_id
update tbl_anggota 
set anggota_id = case
when anggota_id = 'AG-1002' then 'AG-004'
end 
where anggota_id in (
'AG-1002'
);


#Done ---------------------------------------------
-- update tbl_simpanan_detil #simpanan_id
update tbl_simpanan_detil
set simpanan_id = case
when simpanan_id = 'SP-1003' then 'SP-005'
when simpanan_id = 'SP-1004' then 'SP-007'
when simpanan_id = 'SP-1005' then 'SP-010'
end 
where simpanan_id in (
'SP-1003',
'SP-1004',
'SP-1005'
);
#Done
-- update tbl_simpanan #simpanan_id
update tbl_simpanan 
set simpanan_id = case
when simpanan_id = 'SP-1003' then 'SP-005'
when simpanan_id = 'SP-1004' then 'SP-007'
when simpanan_id = 'SP-1005' then 'SP-010'
end 
where simpanan_id in (
'SP-1003',
'SP-1004',
'SP-1005'
);
#Done
-- update tbl_simpanan #anggota_id 
update tbl_simpanan 
set anggota_id = case
when anggota_id = 'AG-1003' then 'AG-005'
when anggota_id = 'AG-1004' then 'AG-007'
when anggota_id = 'AG-1005' then 'AG-010'
end 
where anggota_id in (
'AG-1003',
'AG-1004',
'AG-1005'
);
#Done
-- update tbl_penarikan #simpanan_id 
update tbl_penarikan 
set simpanan_id = case
when simpanan_id = 'SP-1003' then 'SP-005'
when simpanan_id = 'SP-1004' then 'SP-007'
when simpanan_id = 'SP-1005' then 'SP-010'
end
where simpanan_id in (
'SP-1003',
'SP-1004',
'SP-1005'
);

#Done
-- update tbl_anggota #anggota_id
update tbl_anggota 
set anggota_id = case
when anggota_id = 'AG-1003' then 'AG-005'
when anggota_id = 'AG-1004' then 'AG-007'
when anggota_id = 'AG-1005' then 'AG-010'
end 
where anggota_id in (
'AG-1003',
'AG-1004',
'AG-1005'
);

-- update tbl_simpanan_detil #simpanan_id
update tbl_simpanan_detil
set simpanan_id = case
when simpanan_id = 'SP-1006' then 'SP-011'
when simpanan_id = 'SP-1007' then 'SP-018'
when simpanan_id = 'SP-1008' then 'SP-019'
when simpanan_id = 'SP-1009' then 'SP-021'
when simpanan_id = 'SP-1010' then 'SP-022'
when simpanan_id = 'SP-1011' then 'SP-023'
when simpanan_id = 'SP-1012' then 'SP-024'
when simpanan_id = 'SP-1013' then 'SP-025'
when simpanan_id = 'SP-1014' then 'SP-026'
when simpanan_id = 'SP-1015' then 'SP-027'
when simpanan_id = 'SP-1016' then 'SP-028'
when simpanan_id = 'SP-1017' then 'SP-029'
when simpanan_id = 'SP-1018' then 'SP-031'
when simpanan_id = 'SP-1019' then 'SP-033'
when simpanan_id = 'SP-1020' then 'SP-034'
when simpanan_id = 'SP-1021' then 'SP-035'
when simpanan_id = 'SP-1022' then 'SP-036'
when simpanan_id = 'SP-1023' then 'SP-037'
when simpanan_id = 'SP-1024' then 'SP-038'
when simpanan_id = 'SP-1025' then 'SP-039'
when simpanan_id = 'SP-1026' then 'SP-040'
when simpanan_id = 'SP-1027' then 'SP-041'
when simpanan_id = 'SP-1028' then 'SP-045'
when simpanan_id = 'SP-1029' then 'SP-046'
when simpanan_id = 'SP-1030' then 'SP-047'
when simpanan_id = 'SP-1031' then 'SP-048'
when simpanan_id = 'SP-1032' then 'SP-050'
when simpanan_id = 'SP-1033' then 'SP-051'
when simpanan_id = 'SP-1035' then 'SP-052'
when simpanan_id = 'SP-1036' then 'SP-053'
when simpanan_id = 'SP-1037' then 'SP-054'
when simpanan_id = 'SP-1038' then 'SP-055'
when simpanan_id = 'SP-1039' then 'SP-056'
when simpanan_id = 'SP-1040' then 'SP-058'
when simpanan_id = 'SP-1041' then 'SP-059'
when simpanan_id = 'SP-1042' then 'SP-060'
when simpanan_id = 'SP-1043' then 'SP-061'
when simpanan_id = 'SP-1044' then 'SP-062'
when simpanan_id = 'SP-1045' then 'SP-063'
when simpanan_id = 'SP-1046' then 'SP-064'
when simpanan_id = 'SP-1047' then 'SP-065'
when simpanan_id = 'SP-1048' then 'SP-066'
end 
where simpanan_id in (
'SP-1006', 
'SP-1007', 
'SP-1008', 
'SP-1009', 
'SP-1010', 
'SP-1011', 
'SP-1012', 
'SP-1013', 
'SP-1014', 
'SP-1015', 
'SP-1016', 
'SP-1017', 
'SP-1018', 
'SP-1019', 
'SP-1020', 
'SP-1021', 
'SP-1022', 
'SP-1023', 
'SP-1024', 
'SP-1025', 
'SP-1026', 
'SP-1027', 
'SP-1028', 
'SP-1029', 
'SP-1030', 
'SP-1031', 
'SP-1032', 
'SP-1033', 
'SP-1035',
'SP-1036', 
'SP-1037', 
'SP-1038', 
'SP-1039', 
'SP-1040', 
'SP-1041', 
'SP-1042', 
'SP-1043', 
'SP-1044', 
'SP-1045', 
'SP-1046', 
'SP-1047', 
'SP-1048'  
);
#Done ---------------------------------------------
-- update tbl_simpanan #simpanan_id
update tbl_simpanan 
set simpanan_id = case
when simpanan_id = 'SP-1006' then 'SP-011'
when simpanan_id = 'SP-1007' then 'SP-018'
when simpanan_id = 'SP-1008' then 'SP-019'
when simpanan_id = 'SP-1009' then 'SP-021'
when simpanan_id = 'SP-1010' then 'SP-022'
when simpanan_id = 'SP-1011' then 'SP-023'
when simpanan_id = 'SP-1012' then 'SP-024'
when simpanan_id = 'SP-1013' then 'SP-025'
when simpanan_id = 'SP-1014' then 'SP-026'
when simpanan_id = 'SP-1015' then 'SP-027'
when simpanan_id = 'SP-1016' then 'SP-028'
when simpanan_id = 'SP-1017' then 'SP-029'
when simpanan_id = 'SP-1018' then 'SP-031'
when simpanan_id = 'SP-1019' then 'SP-033'
when simpanan_id = 'SP-1020' then 'SP-034'
when simpanan_id = 'SP-1021' then 'SP-035'
when simpanan_id = 'SP-1022' then 'SP-036'
when simpanan_id = 'SP-1023' then 'SP-037'
when simpanan_id = 'SP-1024' then 'SP-038'
when simpanan_id = 'SP-1025' then 'SP-039'
when simpanan_id = 'SP-1026' then 'SP-040'
when simpanan_id = 'SP-1027' then 'SP-041'
when simpanan_id = 'SP-1028' then 'SP-045'
when simpanan_id = 'SP-1029' then 'SP-046'
when simpanan_id = 'SP-1030' then 'SP-047'
when simpanan_id = 'SP-1031' then 'SP-048'
when simpanan_id = 'SP-1032' then 'SP-050'
when simpanan_id = 'SP-1033' then 'SP-051'
when simpanan_id = 'SP-1035' then 'SP-052'
when simpanan_id = 'SP-1036' then 'SP-053'
when simpanan_id = 'SP-1037' then 'SP-054'
when simpanan_id = 'SP-1038' then 'SP-055'
when simpanan_id = 'SP-1039' then 'SP-056'
when simpanan_id = 'SP-1040' then 'SP-058'
when simpanan_id = 'SP-1041' then 'SP-059'
when simpanan_id = 'SP-1042' then 'SP-060'
when simpanan_id = 'SP-1043' then 'SP-061'
when simpanan_id = 'SP-1044' then 'SP-062'
when simpanan_id = 'SP-1045' then 'SP-063'
when simpanan_id = 'SP-1046' then 'SP-064'
when simpanan_id = 'SP-1047' then 'SP-065'
when simpanan_id = 'SP-1048' then 'SP-066'
end 
where simpanan_id in (
'SP-1006', 
'SP-1007', 
'SP-1008', 
'SP-1009', 
'SP-1010', 
'SP-1011', 
'SP-1012', 
'SP-1013', 
'SP-1014', 
'SP-1015', 
'SP-1016', 
'SP-1017', 
'SP-1018', 
'SP-1019', 
'SP-1020', 
'SP-1021', 
'SP-1022', 
'SP-1023', 
'SP-1024', 
'SP-1025', 
'SP-1026', 
'SP-1027', 
'SP-1028', 
'SP-1029', 
'SP-1030', 
'SP-1031', 
'SP-1032', 
'SP-1033', 
'SP-1035',
'SP-1036', 
'SP-1037', 
'SP-1038', 
'SP-1039', 
'SP-1040', 
'SP-1041', 
'SP-1042', 
'SP-1043', 
'SP-1044', 
'SP-1045', 
'SP-1046', 
'SP-1047', 
'SP-1048'  
);
----------------------
#Done
-- update tbl_simpanan #anggota_id 
update tbl_simpanan 
set anggota_id = case
when anggota_id = 'AG-1006' then 'AG-011' 
when anggota_id = 'AG-1007' then 'AG-018'
when anggota_id = 'AG-1008' then 'AG-019'
when anggota_id = 'AG-1009' then 'AG-021'
when anggota_id = 'AG-1010' then 'AG-022'
when anggota_id = 'AG-1011' then 'AG-023'
when anggota_id = 'AG-1012' then 'AG-024'
when anggota_id = 'AG-1013' then 'AG-025'
when anggota_id = 'AG-1014' then 'AG-026'
when anggota_id = 'AG-1015' then 'AG-027'
when anggota_id = 'AG-1016' then 'AG-028'
when anggota_id = 'AG-1017' then 'AG-029'
when anggota_id = 'AG-1018' then 'AG-031'
when anggota_id = 'AG-1019' then 'AG-033'
when anggota_id = 'AG-1020' then 'AG-034'
when anggota_id = 'AG-1021' then 'AG-035'
when anggota_id = 'AG-1022' then 'AG-036'
when anggota_id = 'AG-1023' then 'AG-037'
when anggota_id = 'AG-1024' then 'AG-038'
when anggota_id = 'AG-1025' then 'AG-039'
when anggota_id = 'AG-1026' then 'AG-040'
when anggota_id = 'AG-1027' then 'AG-041'
when anggota_id = 'AG-1028' then 'AG-045'
when anggota_id = 'AG-1029' then 'AG-046'
when anggota_id = 'AG-1030' then 'AG-047'
when anggota_id = 'AG-1031' then 'AG-048'
when anggota_id = 'AG-1032' then 'AG-050'
when anggota_id = 'AG-1033' then 'AG-051'
when anggota_id = 'AG-1035' then 'AG-052'
when anggota_id = 'AG-1036' then 'AG-053'
when anggota_id = 'AG-1037' then 'AG-054'
when anggota_id = 'AG-1038' then 'AG-055'
when anggota_id = 'AG-1039' then 'AG-056'
when anggota_id = 'AG-1040' then 'AG-058'
when anggota_id = 'AG-1041' then 'AG-059'
when anggota_id = 'AG-1042' then 'AG-060'
when anggota_id = 'AG-1043' then 'AG-061'
when anggota_id = 'AG-1044' then 'AG-062'
when anggota_id = 'AG-1045' then 'AG-063'
when anggota_id = 'AG-1046' then 'AG-064'
when anggota_id = 'AG-1047' then 'AG-065'
when anggota_id = 'AG-1048' then 'AG-066'
end 
where anggota_id in (
'AG-1006', 
'AG-1007', 
'AG-1008', 
'AG-1009', 
'AG-1010', 
'AG-1011', 
'AG-1012', 
'AG-1013', 
'AG-1014', 
'AG-1015', 
'AG-1016', 
'AG-1017', 
'AG-1018', 
'AG-1019', 
'AG-1020', 
'AG-1021', 
'AG-1022', 
'AG-1023', 
'AG-1024', 
'AG-1025', 
'AG-1026', 
'AG-1027', 
'AG-1028', 
'AG-1029', 
'AG-1030', 
'AG-1031', 
'AG-1032', 
'AG-1033', 
'AG-1035', 
'AG-1036', 
'AG-1037', 
'AG-1038', 
'AG-1039', 
'AG-1040', 
'AG-1041', 
'AG-1042', 
'AG-1043', 
'AG-1044', 
'AG-1045', 
'AG-1046', 
'AG-1047', 
'AG-1048'
);

---------------------------------------
#UPDATE TABLE tbl_penarikan

-- update tbl_penarikan #simpanan_id 
update tbl_penarikan 
set simpanan_id = case
when simpanan_id = 'SP-1011' then 'SP-023'
when simpanan_id = 'SP-1016' then 'SP-028'
when simpanan_id = 'SP-1018' then 'SP-031'
when simpanan_id = 'SP-1020' then 'SP-034'
when simpanan_id = 'SP-1021' then 'SP-035'
when simpanan_id = 'SP-1023' then 'SP-037'
when simpanan_id = 'SP-1024' then 'SP-038'
when simpanan_id = 'SP-1025' then 'SP-039'
when simpanan_id = 'SP-1027' then 'SP-041'
when simpanan_id = 'SP-1031' then 'SP-048'
when simpanan_id = 'SP-1033' then 'SP-051'
when simpanan_id = 'SP-1036' then 'SP-053'
when simpanan_id = 'SP-1037' then 'SP-054'
when simpanan_id = 'SP-1038' then 'SP-055'
when simpanan_id = 'SP-1039' then 'SP-056'
when simpanan_id = 'SP-1040' then 'SP-058'
when simpanan_id = 'SP-1041' then 'SP-059'
when simpanan_id = 'SP-1042' then 'SP-060'
when simpanan_id = 'SP-1043' then 'SP-061'
when simpanan_id = 'SP-1044' then 'SP-062'
when simpanan_id = 'SP-1046' then 'SP-064'
when simpanan_id = 'SP-1091' then 'SP-215'
when simpanan_id = 'SP-1119' then 'SP-260'
when simpanan_id = 'SP-1059' then 'SP-106'
when simpanan_id = 'SP-1061' then 'SP-117'
when simpanan_id = 'SP-1069' then 'SP-130'
when simpanan_id = 'SP-1074' then 'SP-151'
when simpanan_id = 'SP-1075' then 'SP-152'
when simpanan_id = 'SP-1093' then 'SP-208'
when simpanan_id = 'SP-1116' then 'SP-254'
when simpanan_id = 'SP-1126' then 'SP-274'
when simpanan_id = 'SP-1134' then 'SP-283'
when simpanan_id = 'SP-1110' then 'SP-241'
when simpanan_id = 'SP-1107' then 'SP-238'
end
where simpanan_id in (
'SP-1011', 
'SP-1016', 
'SP-1018', 
'SP-1020', 
'SP-1021', 
'SP-1023', 
'SP-1024', 
'SP-1025', 
'SP-1027', 
'SP-1031', 
'SP-1033', 
'SP-1036', 
'SP-1037', 
'SP-1038', 
'SP-1039', 
'SP-1040', 
'SP-1041', 
'SP-1042', 
'SP-1043', 
'SP-1044', 
'SP-1046', 
'SP-1091', 
'SP-1119', 
'SP-1059', 
'SP-1061', 
'SP-1069', 
'SP-1074', 
'SP-1075', 
'SP-1093', 
'SP-1116', 
'SP-1126', 
'SP-1134', 
'SP-1110', 
'SP-1107'
);


------------------------------------------------------

-- update tbl_anggota #anggota_id
update tbl_anggota 
set anggota_id = case
when anggota_id = 'AG-1006' then 'AG-011' 
when anggota_id = 'AG-1007' then 'AG-018' 
when anggota_id = 'AG-1008' then 'AG-019' 
when anggota_id = 'AG-1009' then 'AG-021' 
when anggota_id = 'AG-1010' then 'AG-022' 
when anggota_id = 'AG-1011' then 'AG-023' 
when anggota_id = 'AG-1012' then 'AG-024' 
when anggota_id = 'AG-1013' then 'AG-025' 
when anggota_id = 'AG-1014' then 'AG-026' 
when anggota_id = 'AG-1015' then 'AG-027' 
when anggota_id = 'AG-1016' then 'AG-028' 
when anggota_id = 'AG-1017' then 'AG-029' 
when anggota_id = 'AG-1018' then 'AG-031' 
when anggota_id = 'AG-1019' then 'AG-033' 
when anggota_id = 'AG-1020' then 'AG-034' 
when anggota_id = 'AG-1021' then 'AG-035' 
when anggota_id = 'AG-1022' then 'AG-036' 
when anggota_id = 'AG-1023' then 'AG-037' 
when anggota_id = 'AG-1024' then 'AG-038' 
when anggota_id = 'AG-1025' then 'AG-039' 
when anggota_id = 'AG-1026' then 'AG-040' 
when anggota_id = 'AG-1027' then 'AG-041' 
when anggota_id = 'AG-1028' then 'AG-045' 
when anggota_id = 'AG-1029' then 'AG-046' 
when anggota_id = 'AG-1030' then 'AG-047' 
when anggota_id = 'AG-1031' then 'AG-048' 
when anggota_id = 'AG-1032' then 'AG-050' 
when anggota_id = 'AG-1033' then 'AG-051' 
when anggota_id = 'AG-1035' then 'AG-052' 
when anggota_id = 'AG-1036' then 'AG-053' 
when anggota_id = 'AG-1037' then 'AG-054' 
when anggota_id = 'AG-1038' then 'AG-055' 
when anggota_id = 'AG-1039' then 'AG-056' 
when anggota_id = 'AG-1040' then 'AG-058' 
when anggota_id = 'AG-1041' then 'AG-059' 
when anggota_id = 'AG-1042' then 'AG-060' 
when anggota_id = 'AG-1043' then 'AG-061' 
when anggota_id = 'AG-1044' then 'AG-062' 
when anggota_id = 'AG-1045' then 'AG-063' 
when anggota_id = 'AG-1046' then 'AG-064' 
when anggota_id = 'AG-1047' then 'AG-065' 
when anggota_id = 'AG-1048' then 'AG-066' 
end
where anggota_id in (
'AG-1006', 
'AG-1007', 
'AG-1008', 
'AG-1009', 
'AG-1010', 
'AG-1011', 
'AG-1012', 
'AG-1013', 
'AG-1014', 
'AG-1015', 
'AG-1016', 
'AG-1017', 
'AG-1018', 
'AG-1019', 
'AG-1020', 
'AG-1021', 
'AG-1022', 
'AG-1023', 
'AG-1024', 
'AG-1025', 
'AG-1026', 
'AG-1027', 
'AG-1028', 
'AG-1029', 
'AG-1030', 
'AG-1031', 
'AG-1032', 
'AG-1033', 
'AG-1035', 
'AG-1036', 
'AG-1037', 
'AG-1038', 
'AG-1039', 
'AG-1040', 
'AG-1041', 
'AG-1042', 
'AG-1043', 
'AG-1044', 
'AG-1045', 
'AG-1046', 
'AG-1047', 
'AG-1048' 
);


-------------------

#UPDATE DATA DARSONO 1034 -> 02	
-- update tbl_simpanan_detil #simpanan_id

update tbl_simpanan_detil
set simpanan_id = case 
when simpanan_id = 'SP-1034' then 'SP-002'
end 
where simpanan_id in (
'SP-1034'
);

-- update tbl_simpanan #simpanan_id
update tbl_simpanan 
set simpanan_id = case
when simpanan_id = 'SP-1034' then 'SP-002'
end 
where simpanan_id in (
'SP-1034'
);

-- update tbl_simpanan #anggota_id 
update tbl_simpanan 
set anggota_id = case
when anggota_id = 'AG-1034' then 'AG-002'
end 
where anggota_id in (
'AG-1034'
);


-- update tbl_anggota #anggota_id
update tbl_anggota 
set anggota_id = case
when anggota_id = 'AG-1034' then 'AG-002'
end 
where anggota_id in (
'AG-1034'
);


-------------------------------------------------
TERAKHIR SAMPAI SINI #YANG DIATAS DONE !!!!!!!!!!!!!!!!!
	Lanjutkan Query di bawah ini

	
-- update tbl_simpanan_detil #simpanan_id	
#UPDATE TABLE tbl_simpanan_detil

update tbl_simpanan_detil
set simpanan_id = case 
when simpanan_id = 'SP-1070' then 'SP-137'
when simpanan_id = 'SP-1139' then -- 'SP-139' 
when simpanan_id = 'SP-1064' then 'SP-120'
when simpanan_id = 'SP-1072' then 'SP-148'
when simpanan_id = 'SP-1084' then 'SP-192'
when simpanan_id = 'SP-1091' then 'SP-215'
when simpanan_id = 'SP-1109' then 'SP-240'
-- when simpanan_id = 'SP-1137' then #Diisi oleh Ibu Diyah Junaedi
when simpanan_id = 'SP-1118' then 'SP-257'
when simpanan_id = 'SP-1119' then 'SP-260'
when simpanan_id = 'SP-1120' then 'SP-263' 
when simpanan_id = 'SP-1131' then 'SP-280'
when simpanan_id = 'SP-1051' then 'SP-075'
when simpanan_id = 'SP-1059' then 'SP-106'
when simpanan_id = 'SP-1061' then 'SP-117'
when simpanan_id = 'SP-1068' then 'SP-124'
when simpanan_id = 'SP-1073' then 'SP-150'
when simpanan_id = 'SP-1071' then 'SP-150'
when simpanan_id = 'SP-1069' then -- 'SP-071'
when simpanan_id = 'SP-1074' then 'SP-151'
when simpanan_id = 'SP-1075' then 'SP-152'
when simpanan_id = 'SP-1076' then 'SP-153'
when simpanan_id = 'SP-1077' then 'SP-155'
when simpanan_id = 'SP-1082' then 'SP-176'
when simpanan_id = 'SP-1093' then 'SP-208'
when simpanan_id = 'SP-1092' then 'SP-205'
when simpanan_id = 'SP-1096' then 'SP-216'
when simpanan_id = 'SP-1097' then 'SP-217'
when simpanan_id = 'SP-1116' then 'SP-254'
when simpanan_id = 'SP-1126' then 'SP-274'
when simpanan_id = 'SP-1134' then 'SP-283'
when simpanan_id = 'SP-1132' then 'SP-281'
when simpanan_id = 'SP-1125' then -- 'SP-125'
when simpanan_id = 'SP-1124' then 'SP-272'
when simpanan_id = 'SP-1123' then 'SP-271'
when simpanan_id = 'SP-1117' then 'SP-255'
when simpanan_id = 'SP-1110' then 'SP-241'
when simpanan_id = 'SP-1107' then 'SP-238'
end 
where simpanan_id in (
'SP-1070', 
'SP-1139', 
'SP-1064', 
'SP-1072', 
'SP-1084', 
'SP-1091', 
'SP-1109', 
'SP-1137', 
'SP-1118', 
'SP-1119', 
'SP-1120', 
'SP-1131', 
'SP-1051', 
'SP-1059', 
'SP-1061', 
'SP-1068', 
'SP-1073', 
'SP-1071', 
'SP-1069', 
'SP-1074', 
'SP-1075', 
'SP-1076', 
'SP-1077', 
'SP-1082', 
'SP-1093', 
'SP-1092', 
'SP-1096', 
'SP-1097', 
'SP-1116', 
'SP-1126', 
'SP-1134', 
'SP-1132', 
'SP-1125', 
'SP-1124', 
'SP-1123', 
'SP-1117', 
'SP-1110', 
'SP-1107'
);


-- update tbl_simpanan #simpanan_id
update tbl_simpanan 
set simpanan_id = case
-- when simpanan_id = 'SP-1060' then #Diisi oleh Wawan Suryana
when simpanan_id = 'SP-1050' then 'SP-070'
when simpanan_id = 'SP-1051' then 'SP-075'
when simpanan_id = 'SP-1052' then 'SP-067'
-- when simpanan_id = 'SP-1053' then -- Kindi / Kakang Bahrudin
when simpanan_id = 'SP-1054' then 'SP-079'
when simpanan_id = 'SP-1055' then 'SP-082'
when simpanan_id = 'SP-1056' then 'SP-083'
when simpanan_id = 'SP-1057' then 'SP-088'
when simpanan_id = 'SP-1058' then 'SP-098'
when simpanan_id = 'SP-1059' then 'SP-106'
when simpanan_id = 'SP-1061' then 'SP-117'
when simpanan_id = 'SP-1062' then 'SP-118'
when simpanan_id = 'SP-1063' then 'SP-119'
when simpanan_id = 'SP-1064' then 'SP-120'
when simpanan_id = 'SP-1065' then 'SP-073'
when simpanan_id = 'SP-1066' then 'SP-066'
when simpanan_id = 'SP-1067' then 'SP-129'
when simpanan_id = 'SP-1068' then 'SP-124'
when simpanan_id = 'SP-1069' then 'SP-130'
when simpanan_id = 'SP-1070' then 'SP-137'
when simpanan_id = 'SP-1071' then 'SP-071'
when simpanan_id = 'SP-1072' then 'SP-148'
when simpanan_id = 'SP-1073' then 'SP-150'
when simpanan_id = 'SP-1074' then 'SP-151'
when simpanan_id = 'SP-1075' then 'SP-152'
when simpanan_id = 'SP-1076' then 'SP-153'
when simpanan_id = 'SP-1077' then 'SP-155'
when simpanan_id = 'SP-1078' then 'SP-156'
when simpanan_id = 'SP-1079' then 'SP-164'
when simpanan_id = 'SP-1080' then 'SP-169'
when simpanan_id = 'SP-1081' then 'SP-152'
when simpanan_id = 'SP-1082' then 'SP-176'
-- when simpanan_id = 'SP-1083' then #Diisi oleh bu Emeh
when simpanan_id = 'SP-1084' then 'SP-192'
when simpanan_id = 'SP-1085' then 'SP-194'
when simpanan_id = 'SP-1086' then -- 'SP-086'
when simpanan_id = 'SP-1087' then -- 'SP-087'
when simpanan_id = 'SP-1088' then 'SP-199'
when simpanan_id = 'SP-1089' then 'SP-201'
when simpanan_id = 'SP-1090' then 'SP-202'
when simpanan_id = 'SP-1091' then 'SP-215'
when simpanan_id = 'SP-1092' then 'SP-205'
when simpanan_id = 'SP-1093' then 'SP-208'
when simpanan_id = 'SP-1094' then 'SP-211'
when simpanan_id = 'SP-1095' then 'SP-212'
when simpanan_id = 'SP-1096' then 'SP-216'
when simpanan_id = 'SP-1097' then 'SP-217'
when simpanan_id = 'SP-1098' then 'SP-218'
when simpanan_id = 'SP-1099' then -- 'SP-099'
when simpanan_id = 'SP-1100' then 'SP-222'
when simpanan_id = 'SP-1101' then 'SP-227'
when simpanan_id = 'SP-1102' then 'SP-229'
when simpanan_id = 'SP-1103' then 'SP-230'
when simpanan_id = 'SP-1104' then 'SP-232'
when simpanan_id = 'SP-1105' then 'SP-235'
when simpanan_id = 'SP-1106' then 'SP-236'
when simpanan_id = 'SP-1107' then 'SP-238'
when simpanan_id = 'SP-1108' then 'SP-239'
when simpanan_id = 'SP-1109' then 'SP-240'
when simpanan_id = 'SP-1110' then 'SP-241'
when simpanan_id = 'SP-1111' then 'SP-244'
when simpanan_id = 'SP-1112' then 'SP-245'
when simpanan_id = 'SP-1113' then 'SP-246'
when simpanan_id = 'SP-1114' then 'SP-247'
when simpanan_id = 'SP-1115' then 'SP-253'
when simpanan_id = 'SP-1116' then 'SP-254'
when simpanan_id = 'SP-1117' then 'SP-255'
when simpanan_id = 'SP-1118' then 'SP-257'
when simpanan_id = 'SP-1119' then 'SP-260'
when simpanan_id = 'SP-1120' then 'SP-263'
when simpanan_id = 'SP-1121' then 'SP-264'
when simpanan_id = 'SP-1122' then 'SP-265'
when simpanan_id = 'SP-1123' then 'SP-271'
when simpanan_id = 'SP-1124' then 'SP-272'
when simpanan_id = 'SP-1125' then -- 'SP-125'
when simpanan_id = 'SP-1126' then 'SP-274'
when simpanan_id = 'SP-1127' then 'SP-275'
when simpanan_id = 'SP-1128' then 'SP-276'
when simpanan_id = 'SP-1129' then 'SP-277'
when simpanan_id = 'SP-1130' then 'SP-278'
when simpanan_id = 'SP-1131' then 'SP-280'
when simpanan_id = 'SP-1132' then 'SP-281'
when simpanan_id = 'SP-1133' then 'SP-282'
when simpanan_id = 'SP-1134' then 'SP-283'
when simpanan_id = 'SP-1135' then 'SP-286'
when simpanan_id = 'SP-1136' then 'SP-287'
-- when simpanan_id = 'SP-1137' then #Diisi oleh Ibu Diyah Junaedi
when simpanan_id = 'SP-1138' then -- 'SP-138'
when simpanan_id = 'SP-1139' then -- 'SP-139'
when simpanan_id = 'SP-1140' then -- 'SP-140'
when simpanan_id = 'SP-1141' then -- 'SP-141'
when simpanan_id = 'SP-1142' then -- 'SP-142'
when simpanan_id = 'SP-1143' then 'SP-204'
when simpanan_id = 'SP-1144' then 'SP-231'
end 
where simpanan_id in (
-- 'SP-1060', 
'SP-1050', 
'SP-1051', 
'SP-1052', 
-- 'SP-1053', 
'SP-1054', 
'SP-1055', 
'SP-1056', 
'SP-1057', 
'SP-1058', 
'SP-1059', 
'SP-1061', 
'SP-1062', 
'SP-1063', 
'SP-1064', 
'SP-1065', 
'SP-1066', 
'SP-1067', 
'SP-1068', 
'SP-1069', 
'SP-1070', 
'SP-1071', 
'SP-1072', 
'SP-1073', 
'SP-1074', 
'SP-1075', 
'SP-1076', 
'SP-1077', 
'SP-1078', 
'SP-1079', 
'SP-1080', 
'SP-1081', 
'SP-1082', 
-- 'SP-1083', 
'SP-1084', 
'SP-1085', 
'SP-1086', 
'SP-1087', 
'SP-1088', 
'SP-1089', 
'SP-1090', 
'SP-1091', 
'SP-1092', 
'SP-1093', 
'SP-1094', 
'SP-1095', 
'SP-1096', 
'SP-1097', 
'SP-1098', 
'SP-1099', 
'SP-1100', 
'SP-1101', 
'SP-1102', 
'SP-1103', 
'SP-1104', 
'SP-1105', 
'SP-1106', 
'SP-1107', 
'SP-1108', 
'SP-1109', 
'SP-1110', 
'SP-1111', 
'SP-1112', 
'SP-1113', 
'SP-1114', 
'SP-1115', 
'SP-1116', 
'SP-1117', 
'SP-1118', 
'SP-1119', 
'SP-1120', 
'SP-1121', 
'SP-1122', 
'SP-1123', 
'SP-1124', 
'SP-1125', 
'SP-1126', 
'SP-1127', 
'SP-1128', 
'SP-1129', 
'SP-1130', 
'SP-1131', 
'SP-1132', 
'SP-1133', 
'SP-1134', 
'SP-1135', 
'SP-1136', 
-- 'SP-1137', 
'SP-1138', 
'SP-1139', 
'SP-1140', 
'SP-1141', 
'SP-1142', 
'SP-1143', 
'SP-1144' 
);

-- update tbl_simpanan #anggota_id 
update tbl_simpanan 
set anggota_id = case
-- when simpanan_id = 'AG-1060' then #Diisi oleh Wawan Suryana
when anggota_id = 'AG-1050' then 'AG-070'                
when anggota_id = 'AG-1051' then 'AG-075'                
when anggota_id = 'AG-1052' then 'AG-067'                
-- when simpanan_id = 'AG-1053' then -- Kindi / Kakang Bahrudin
when anggota_id = 'AG-1054' then 'AG-079'                 
when anggota_id = 'AG-1055' then 'AG-082'                 
when anggota_id = 'AG-1056' then 'AG-083'                 
when anggota_id = 'AG-1057' then 'AG-088'                 
when anggota_id = 'AG-1058' then 'AG-098'                 
when anggota_id = 'AG-1059' then 'AG-106'                 
when anggota_id = 'AG-1061' then 'AG-117'                 
when anggota_id = 'AG-1062' then 'AG-118'                 
when anggota_id = 'AG-1063' then 'AG-119'                 
when anggota_id = 'AG-1064' then 'AG-120'                 
when anggota_id = 'AG-1065' then 'AG-073'                 
when anggota_id = 'AG-1066' then 'AG-066'                 
when anggota_id = 'AG-1067' then 'AG-129'                 
when anggota_id = 'AG-1068' then 'AG-124'                 
when anggota_id = 'AG-1069' then 'AG-130'                 
when anggota_id = 'AG-1070' then 'AG-137'                 
when anggota_id = 'AG-1071' then 'AG-071'                 
when anggota_id = 'AG-1072' then 'AG-148'                 
when anggota_id = 'AG-1073' then 'AG-150'                 
when anggota_id = 'AG-1074' then 'AG-151'                 
when anggota_id = 'AG-1075' then 'AG-152'                 
when anggota_id = 'AG-1076' then 'AG-153'                 
when anggota_id = 'AG-1077' then 'AG-155'                 
when anggota_id = 'AG-1078' then 'AG-156'                 
when anggota_id = 'AG-1079' then 'AG-164'                 
when anggota_id = 'AG-1080' then 'AG-169'                 
when anggota_id = 'AG-1081' then 'AG-152'                 
when anggota_id = 'AG-1082' then 'AG-176'                 
-- when simpanan_id = 'AG-1083' then #Diisi oleh bu Emeh
when anggota_id = 'AG-1084' then 'AG-192'                 
when anggota_id = 'AG-1085' then 'AG-194'                 
when anggota_id = 'AG-1086' then -- 'AG-086'              
when anggota_id = 'AG-1087' then -- 'AG-087'              
when anggota_id = 'AG-1088' then 'AG-199'                 
when anggota_id = 'AG-1089' then 'AG-201'                 
when anggota_id = 'AG-1090' then 'AG-202'                 
when anggota_id = 'AG-1091' then 'AG-215'                 
when anggota_id = 'AG-1092' then 'AG-205'                 
when anggota_id = 'AG-1093' then 'AG-208'                 
when anggota_id = 'AG-1094' then 'AG-211'                 
when anggota_id = 'AG-1095' then 'AG-212'                 
when anggota_id = 'AG-1096' then 'AG-216'                 
when anggota_id = 'AG-1097' then 'AG-217'                 
when anggota_id = 'AG-1098' then 'AG-218'                 
when anggota_id = 'AG-1099' then -- 'AG-099'              
when anggota_id = 'AG-1100' then 'AG-222'                 
when anggota_id = 'AG-1101' then 'AG-227'                 
when anggota_id = 'AG-1102' then 'AG-229'                 
when anggota_id = 'AG-1103' then 'AG-230'                 
when anggota_id = 'AG-1104' then 'AG-232'                 
when anggota_id = 'AG-1105' then 'AG-235'                 
when anggota_id = 'AG-1106' then 'AG-236'                 
when anggota_id = 'AG-1107' then 'AG-238'                 
when anggota_id = 'AG-1108' then 'AG-239'                 
when anggota_id = 'AG-1109' then 'AG-240'                 
when anggota_id = 'AG-1110' then 'AG-241'                 
when anggota_id = 'AG-1111' then 'AG-244'                 
when anggota_id = 'AG-1112' then 'AG-245'                 
when anggota_id = 'AG-1113' then 'AG-246'                 
when anggota_id = 'AG-1114' then 'AG-247'                 
when anggota_id = 'AG-1115' then 'AG-253'                 
when anggota_id = 'AG-1116' then 'AG-254'                 
when anggota_id = 'AG-1117' then 'AG-255'                 
when anggota_id = 'AG-1118' then 'AG-257'                 
when anggota_id = 'AG-1119' then 'AG-260'                 
when anggota_id = 'AG-1120' then 'AG-263'                 
when anggota_id = 'AG-1121' then 'AG-264'                 
when anggota_id = 'AG-1122' then 'AG-265'                 
when anggota_id = 'AG-1123' then 'AG-271'                 
when anggota_id = 'AG-1124' then 'AG-272'                 
when anggota_id = 'AG-1125' then -- 'AG-125'              
when anggota_id = 'AG-1126' then 'AG-274'                 
when anggota_id = 'AG-1127' then 'AG-275'                 
when anggota_id = 'AG-1128' then 'AG-276'                 
when anggota_id = 'AG-1129' then 'AG-277'                 
when anggota_id = 'AG-1130' then 'AG-278'                 
when anggota_id = 'AG-1131' then 'AG-280'                 
when anggota_id = 'AG-1132' then 'AG-281'                 
when anggota_id = 'AG-1133' then 'AG-282'                 
when anggota_id = 'AG-1134' then 'AG-283'                 
when anggota_id = 'AG-1135' then 'AG-286'                 
when anggota_id = 'AG-1136' then 'AG-287'                 
-- when simpanan_id = 'AG-1137' then #Diisi oleh Ibu Diyah Junaedi
when anggota_id = 'AG-1138' then -- 'AG-138'              
when anggota_id = 'AG-1139' then -- 'AG-139'              
when anggota_id = 'AG-1140' then -- 'AG-140'              
when anggota_id = 'AG-1141' then -- 'AG-141'              
when anggota_id = 'AG-1142' then -- 'AG-142'              
when anggota_id = 'AG-1143' then 'AG-204'                 
when anggota_id = 'AG-1144' then 'AG-231'                 
end 
where anggota_id in (
-- 'AG-1060', 
'AG-1050', 
'AG-1051', 
'AG-1052', 
-- 'AG-1053', 
'AG-1054', 
'AG-1055', 
'AG-1056', 
'AG-1057', 
'AG-1058', 
'AG-1059', 
'AG-1061', 
'AG-1062', 
'AG-1063', 
'AG-1064', 
'AG-1065', 
'AG-1066', 
'AG-1067', 
'AG-1068', 
'AG-1069', 
'AG-1070', 
'AG-1071', 
'AG-1072', 
'AG-1073', 
'AG-1074', 
'AG-1075', 
'AG-1076', 
'AG-1077', 
'AG-1078', 
'AG-1079', 
'AG-1080', 
'AG-1081', 
'AG-1082', 
-- 'AG-1083', 
'AG-1084', 
'AG-1085', 
'AG-1086', 
'AG-1087', 
'AG-1088', 
'AG-1089', 
'AG-1090', 
'AG-1091', 
'AG-1092', 
'AG-1093', 
'AG-1094', 
'AG-1095', 
'AG-1096', 
'AG-1097', 
'AG-1098', 
'AG-1099', 
'AG-1100', 
'AG-1101', 
'AG-1102', 
'AG-1103', 
'AG-1104', 
'AG-1105', 
'AG-1106', 
'AG-1107', 
'AG-1108', 
'AG-1109', 
'AG-1110', 
'AG-1111', 
'AG-1112', 
'AG-1113', 
'AG-1114', 
'AG-1115', 
'AG-1116', 
'AG-1117', 
'AG-1118', 
'AG-1119', 
'AG-1120', 
'AG-1121', 
'AG-1122', 
'AG-1123', 
'AG-1124', 
'AG-1125', 
'AG-1126', 
'AG-1127', 
'AG-1128', 
'AG-1129', 
'AG-1130', 
'AG-1131', 
'AG-1132', 
'AG-1133', 
'AG-1134', 
'AG-1135', 
'AG-1136', 
-- 'AG-1137', 
'AG-1138', 
'AG-1139', 
'AG-1140', 
'AG-1141', 
'AG-1142', 
'AG-1143', 
'AG-1144' 
);

-- update tbl_anggota #anggota_id 
update tbl_anggota 
set anggota_id = case
-- when simpanan_id = 'AG-1060' then #Diisi oleh Wawan Suryana
when anggota_id = 'AG-1050' then 'AG-070'                
when anggota_id = 'AG-1051' then 'AG-075'                
when anggota_id = 'AG-1052' then 'AG-067'                
-- when simpanan_id = 'AG-1053' then -- Kindi / Kakang Bahrudin
when anggota_id = 'AG-1054' then 'AG-079'                 
when anggota_id = 'AG-1055' then 'AG-082'                 
when anggota_id = 'AG-1056' then 'AG-083'                 
when anggota_id = 'AG-1057' then 'AG-088'                 
when anggota_id = 'AG-1058' then 'AG-098'                 
when anggota_id = 'AG-1059' then 'AG-106'                 
when anggota_id = 'AG-1061' then 'AG-117'                 
when anggota_id = 'AG-1062' then 'AG-118'                 
when anggota_id = 'AG-1063' then 'AG-119'                 
when anggota_id = 'AG-1064' then 'AG-120'                 
when anggota_id = 'AG-1065' then 'AG-073'                 
when anggota_id = 'AG-1066' then 'AG-066'                 
when anggota_id = 'AG-1067' then 'AG-129'                 
when anggota_id = 'AG-1068' then 'AG-124'                 
when anggota_id = 'AG-1069' then 'AG-130'                 
when anggota_id = 'AG-1070' then 'AG-137'                 
when anggota_id = 'AG-1071' then 'AG-071'                 
when anggota_id = 'AG-1072' then 'AG-148'                 
when anggota_id = 'AG-1073' then 'AG-150'                 
when anggota_id = 'AG-1074' then 'AG-151'                 
when anggota_id = 'AG-1075' then 'AG-152'                 
when anggota_id = 'AG-1076' then 'AG-153'                 
when anggota_id = 'AG-1077' then 'AG-155'                 
when anggota_id = 'AG-1078' then 'AG-156'                 
when anggota_id = 'AG-1079' then 'AG-164'                 
when anggota_id = 'AG-1080' then 'AG-169'                 
when anggota_id = 'AG-1081' then 'AG-152'                 
when anggota_id = 'AG-1082' then 'AG-176'                 
-- when simpanan_id = 'AG-1083' then #Diisi oleh bu Emeh
when anggota_id = 'AG-1084' then 'AG-192'                 
when anggota_id = 'AG-1085' then 'AG-194'                 
when anggota_id = 'AG-1086' then -- 'AG-086'              
when anggota_id = 'AG-1087' then -- 'AG-087'              
when anggota_id = 'AG-1088' then 'AG-199'                 
when anggota_id = 'AG-1089' then 'AG-201'                 
when anggota_id = 'AG-1090' then 'AG-202'                 
when anggota_id = 'AG-1091' then 'AG-215'                 
when anggota_id = 'AG-1092' then 'AG-205'                 
when anggota_id = 'AG-1093' then 'AG-208'                 
when anggota_id = 'AG-1094' then 'AG-211'                 
when anggota_id = 'AG-1095' then 'AG-212'                 
when anggota_id = 'AG-1096' then 'AG-216'                 
when anggota_id = 'AG-1097' then 'AG-217'                 
when anggota_id = 'AG-1098' then 'AG-218'                 
when anggota_id = 'AG-1099' then -- 'AG-099'              
when anggota_id = 'AG-1100' then 'AG-222'                 
when anggota_id = 'AG-1101' then 'AG-227'                 
when anggota_id = 'AG-1102' then 'AG-229'                 
when anggota_id = 'AG-1103' then 'AG-230'                 
when anggota_id = 'AG-1104' then 'AG-232'                 
when anggota_id = 'AG-1105' then 'AG-235'                 
when anggota_id = 'AG-1106' then 'AG-236'                 
when anggota_id = 'AG-1107' then 'AG-238'                 
when anggota_id = 'AG-1108' then 'AG-239'                 
when anggota_id = 'AG-1109' then 'AG-240'                 
when anggota_id = 'AG-1110' then 'AG-241'                 
when anggota_id = 'AG-1111' then 'AG-244'                 
when anggota_id = 'AG-1112' then 'AG-245'                 
when anggota_id = 'AG-1113' then 'AG-246'                 
when anggota_id = 'AG-1114' then 'AG-247'                 
when anggota_id = 'AG-1115' then 'AG-253'                 
when anggota_id = 'AG-1116' then 'AG-254'                 
when anggota_id = 'AG-1117' then 'AG-255'                 
when anggota_id = 'AG-1118' then 'AG-257'                 
when anggota_id = 'AG-1119' then 'AG-260'                 
when anggota_id = 'AG-1120' then 'AG-263'                 
when anggota_id = 'AG-1121' then 'AG-264'                 
when anggota_id = 'AG-1122' then 'AG-265'                 
when anggota_id = 'AG-1123' then 'AG-271'                 
when anggota_id = 'AG-1124' then 'AG-272'                 
when anggota_id = 'AG-1125' then -- 'AG-125'              
when anggota_id = 'AG-1126' then 'AG-274'                 
when anggota_id = 'AG-1127' then 'AG-275'                 
when anggota_id = 'AG-1128' then 'AG-276'                 
when anggota_id = 'AG-1129' then 'AG-277'                 
when anggota_id = 'AG-1130' then 'AG-278'                 
when anggota_id = 'AG-1131' then 'AG-280'                 
when anggota_id = 'AG-1132' then 'AG-281'                 
when anggota_id = 'AG-1133' then 'AG-282'                 
when anggota_id = 'AG-1134' then 'AG-283'                 
when anggota_id = 'AG-1135' then 'AG-286'                 
when anggota_id = 'AG-1136' then 'AG-287'                 
-- when simpanan_id = 'AG-1137' then #Diisi oleh Ibu Diyah Junaedi
when anggota_id = 'AG-1138' then -- 'AG-138'              
when anggota_id = 'AG-1139' then -- 'AG-139'              
when anggota_id = 'AG-1140' then -- 'AG-140'              
when anggota_id = 'AG-1141' then -- 'AG-141'              
when anggota_id = 'AG-1142' then -- 'AG-142'              
when anggota_id = 'AG-1143' then 'AG-204'                 
when anggota_id = 'AG-1144' then 'AG-231'                 
end 
where anggota_id in (
-- 'AG-1060', 
'AG-1050', 
'AG-1051', 
'AG-1052', 
-- 'AG-1053', 
'AG-1054', 
'AG-1055', 
'AG-1056', 
'AG-1057', 
'AG-1058', 
'AG-1059', 
'AG-1061', 
'AG-1062', 
'AG-1063', 
'AG-1064', 
'AG-1065', 
'AG-1066', 
'AG-1067', 
'AG-1068', 
'AG-1069', 
'AG-1070', 
'AG-1071', 
'AG-1072', 
'AG-1073', 
'AG-1074', 
'AG-1075', 
'AG-1076', 
'AG-1077', 
'AG-1078', 
'AG-1079', 
'AG-1080', 
'AG-1081', 
'AG-1082', 
-- 'AG-1083', 
'AG-1084', 
'AG-1085', 
'AG-1086', 
'AG-1087', 
'AG-1088', 
'AG-1089', 
'AG-1090', 
'AG-1091', 
'AG-1092', 
'AG-1093', 
'AG-1094', 
'AG-1095', 
'AG-1096', 
'AG-1097', 
'AG-1098', 
'AG-1099', 
'AG-1100', 
'AG-1101', 
'AG-1102', 
'AG-1103', 
'AG-1104', 
'AG-1105', 
'AG-1106', 
'AG-1107', 
'AG-1108', 
'AG-1109', 
'AG-1110', 
'AG-1111', 
'AG-1112', 
'AG-1113', 
'AG-1114', 
'AG-1115', 
'AG-1116', 
'AG-1117', 
'AG-1118', 
'AG-1119', 
'AG-1120', 
'AG-1121', 
'AG-1122', 
'AG-1123', 
'AG-1124', 
'AG-1125', 
'AG-1126', 
'AG-1127', 
'AG-1128', 
'AG-1129', 
'AG-1130', 
'AG-1131', 
'AG-1132', 
'AG-1133', 
'AG-1134', 
'AG-1135', 
'AG-1136', 
-- 'AG-1137', 
'AG-1138', 
'AG-1139', 
'AG-1140', 
'AG-1141', 
'AG-1142', 
'AG-1143', 
'AG-1144' 
);

=====================================================
-- update tbl_simpanan_detil #simpanan_id	
#UPDATE TABLE tbl_simpanan_detil
#Done
update tbl_simpanan_detil
set simpanan_id = case 
when simpanan_id = 'SP-1070' then 'SP-137'
when simpanan_id = 'SP-1064' then 'SP-120'
when simpanan_id = 'SP-1072' then 'SP-148'
when simpanan_id = 'SP-1084' then 'SP-192'
when simpanan_id = 'SP-1091' then 'SP-215'
when simpanan_id = 'SP-1109' then 'SP-240'
when simpanan_id = 'SP-1118' then 'SP-257'
when simpanan_id = 'SP-1119' then 'SP-260'
when simpanan_id = 'SP-1120' then 'SP-263' 
when simpanan_id = 'SP-1131' then 'SP-280'
when simpanan_id = 'SP-1051' then 'SP-075'
when simpanan_id = 'SP-1059' then 'SP-106'
when simpanan_id = 'SP-1061' then 'SP-117'
when simpanan_id = 'SP-1068' then 'SP-124'
when simpanan_id = 'SP-1073' then 'SP-150'
when simpanan_id = 'SP-1071' then 'SP-150'
when simpanan_id = 'SP-1074' then 'SP-151'
when simpanan_id = 'SP-1075' then 'SP-152'
when simpanan_id = 'SP-1076' then 'SP-153'
when simpanan_id = 'SP-1077' then 'SP-155'
when simpanan_id = 'SP-1082' then 'SP-176'
when simpanan_id = 'SP-1093' then 'SP-208'
when simpanan_id = 'SP-1092' then 'SP-205'
when simpanan_id = 'SP-1096' then 'SP-216'
when simpanan_id = 'SP-1097' then 'SP-217'
when simpanan_id = 'SP-1116' then 'SP-254'
when simpanan_id = 'SP-1126' then 'SP-274'
when simpanan_id = 'SP-1134' then 'SP-283'
when simpanan_id = 'SP-1132' then 'SP-281'
when simpanan_id = 'SP-1124' then 'SP-272'
when simpanan_id = 'SP-1123' then 'SP-271'
when simpanan_id = 'SP-1117' then 'SP-255'
when simpanan_id = 'SP-1110' then 'SP-241'
when simpanan_id = 'SP-1107' then 'SP-238'
end 
where simpanan_id in (
'SP-1070', 
'SP-1064', 
'SP-1072', 
'SP-1084', 
'SP-1091', 
'SP-1109', 
'SP-1118', 
'SP-1119', 
'SP-1120', 
'SP-1131', 
'SP-1051', 
'SP-1059', 
'SP-1061', 
'SP-1068', 
'SP-1073', 
'SP-1071', 
'SP-1074', 
'SP-1075', 
'SP-1076', 
'SP-1077', 
'SP-1082', 
'SP-1093', 
'SP-1092', 
'SP-1096', 
'SP-1097', 
'SP-1116', 
'SP-1126', 
'SP-1134', 
'SP-1132', 
'SP-1124', 
'SP-1123', 
'SP-1117', 
'SP-1110', 
'SP-1107' 
);

-- update tbl_simpanan #simpanan_id
update tbl_simpanan 
set simpanan_id = case
when simpanan_id = 'SP-1050' then 'SP-070'
when simpanan_id = 'SP-1051' then 'SP-075'
when simpanan_id = 'SP-1052' then 'SP-067'
when simpanan_id = 'SP-1054' then 'SP-079'
when simpanan_id = 'SP-1055' then 'SP-082'
when simpanan_id = 'SP-1056' then 'SP-083'
when simpanan_id = 'SP-1057' then 'SP-088'
when simpanan_id = 'SP-1058' then 'SP-098'
when simpanan_id = 'SP-1059' then 'SP-106'
when simpanan_id = 'SP-1061' then 'SP-117'
when simpanan_id = 'SP-1062' then 'SP-118'
when simpanan_id = 'SP-1063' then 'SP-119'
when simpanan_id = 'SP-1064' then 'SP-120'
when simpanan_id = 'SP-1065' then 'SP-073'
when simpanan_id = 'SP-1067' then 'SP-129'
when simpanan_id = 'SP-1068' then 'SP-124'
when simpanan_id = 'SP-1069' then 'SP-130'
when simpanan_id = 'SP-1070' then 'SP-137'
when simpanan_id = 'SP-1071' then 'SP-071'
when simpanan_id = 'SP-1072' then 'SP-148'
when simpanan_id = 'SP-1073' then 'SP-150'
when simpanan_id = 'SP-1074' then 'SP-151'
-- when simpanan_id = 'SP-1075' then 'SP-152'
when simpanan_id = 'SP-1076' then 'SP-153'
when simpanan_id = 'SP-1077' then 'SP-155'
when simpanan_id = 'SP-1078' then 'SP-156'
when simpanan_id = 'SP-1079' then 'SP-164'
when simpanan_id = 'SP-1080' then 'SP-169'
when simpanan_id = 'SP-1081' then 'SP-152'
when simpanan_id = 'SP-1082' then 'SP-176'
when simpanan_id = 'SP-1084' then 'SP-192'
when simpanan_id = 'SP-1085' then 'SP-194'
when simpanan_id = 'SP-1088' then 'SP-199'
when simpanan_id = 'SP-1089' then 'SP-201'
when simpanan_id = 'SP-1090' then 'SP-202'
when simpanan_id = 'SP-1091' then 'SP-215'
when simpanan_id = 'SP-1092' then 'SP-205'
when simpanan_id = 'SP-1093' then 'SP-208'
when simpanan_id = 'SP-1094' then 'SP-211'
when simpanan_id = 'SP-1095' then 'SP-212'
when simpanan_id = 'SP-1096' then 'SP-216'
when simpanan_id = 'SP-1097' then 'SP-217'
when simpanan_id = 'SP-1098' then 'SP-218'
when simpanan_id = 'SP-1100' then 'SP-222'
when simpanan_id = 'SP-1101' then 'SP-227'
when simpanan_id = 'SP-1102' then 'SP-229'
when simpanan_id = 'SP-1103' then 'SP-230'
when simpanan_id = 'SP-1104' then 'SP-232'
when simpanan_id = 'SP-1105' then 'SP-235'
when simpanan_id = 'SP-1106' then 'SP-236'
when simpanan_id = 'SP-1107' then 'SP-238'
when simpanan_id = 'SP-1108' then 'SP-239'
when simpanan_id = 'SP-1109' then 'SP-240'
when simpanan_id = 'SP-1110' then 'SP-241'
when simpanan_id = 'SP-1111' then 'SP-244'
when simpanan_id = 'SP-1112' then 'SP-245'
when simpanan_id = 'SP-1113' then 'SP-246'
when simpanan_id = 'SP-1114' then 'SP-247'
when simpanan_id = 'SP-1115' then 'SP-253'
when simpanan_id = 'SP-1116' then 'SP-254'
when simpanan_id = 'SP-1117' then 'SP-255'
when simpanan_id = 'SP-1118' then 'SP-257'
when simpanan_id = 'SP-1119' then 'SP-260'
when simpanan_id = 'SP-1120' then 'SP-263'
when simpanan_id = 'SP-1121' then 'SP-264'
when simpanan_id = 'SP-1122' then 'SP-265'
when simpanan_id = 'SP-1123' then 'SP-271'
when simpanan_id = 'SP-1124' then 'SP-272'
when simpanan_id = 'SP-1126' then 'SP-274'
when simpanan_id = 'SP-1127' then 'SP-275'
when simpanan_id = 'SP-1128' then 'SP-276'
when simpanan_id = 'SP-1129' then 'SP-277'
when simpanan_id = 'SP-1130' then 'SP-278'
when simpanan_id = 'SP-1131' then 'SP-280'
when simpanan_id = 'SP-1132' then 'SP-281'
when simpanan_id = 'SP-1133' then 'SP-282'
when simpanan_id = 'SP-1134' then 'SP-283'
when simpanan_id = 'SP-1135' then 'SP-286'
when simpanan_id = 'SP-1136' then 'SP-287'
when simpanan_id = 'SP-1143' then 'SP-204'
when simpanan_id = 'SP-1144' then 'SP-231'
end 
where simpanan_id in (
'SP-1050', 
'SP-1051', 
'SP-1052', 
'SP-1054', 
'SP-1055', 
'SP-1056', 
'SP-1057', 
'SP-1058', 
'SP-1059', 
'SP-1061', 
'SP-1062', 
'SP-1063', 
'SP-1064', 
'SP-1065', 
'SP-1067', 
'SP-1068', 
'SP-1069', 
'SP-1070', 
'SP-1071', 
'SP-1072', 
'SP-1073', 
'SP-1074', 
-- 'SP-1075', 
'SP-1076', 
'SP-1077', 
'SP-1078', 
'SP-1079', 
'SP-1080', 
'SP-1081', 
'SP-1082', 
'SP-1084', 
'SP-1085', 
'SP-1088', 
'SP-1089', 
'SP-1090', 
'SP-1091', 
'SP-1092', 
'SP-1093', 
'SP-1094', 
'SP-1095', 
'SP-1096', 
'SP-1097', 
'SP-1098', 
'SP-1100', 
'SP-1101', 
'SP-1102', 
'SP-1103', 
'SP-1104', 
'SP-1105', 
'SP-1106', 
'SP-1107', 
'SP-1108', 
'SP-1109', 
'SP-1110', 
'SP-1111', 
'SP-1112', 
'SP-1113', 
'SP-1114', 
'SP-1115', 
'SP-1116', 
'SP-1117', 
'SP-1118', 
'SP-1119', 
'SP-1120', 
'SP-1121', 
'SP-1122', 
'SP-1123', 
'SP-1124', 
'SP-1126', 
'SP-1127', 
'SP-1128', 
'SP-1129', 
'SP-1130', 
'SP-1131', 
'SP-1132', 
'SP-1133', 
'SP-1134', 
'SP-1135', 
'SP-1136', 
'SP-1143', 
'SP-1144' 
);

-- update tbl_simpanan #anggota_id 
update tbl_simpanan 
set anggota_id = case
when anggota_id = 'AG-1050' then 'AG-070'                
when anggota_id = 'AG-1051' then 'AG-075'                
when anggota_id = 'AG-1052' then 'AG-067'                
when anggota_id = 'AG-1054' then 'AG-079'                 
when anggota_id = 'AG-1055' then 'AG-082'                 
when anggota_id = 'AG-1056' then 'AG-083'                 
when anggota_id = 'AG-1057' then 'AG-088'                 
when anggota_id = 'AG-1058' then 'AG-098'                 
when anggota_id = 'AG-1059' then 'AG-106'                 
when anggota_id = 'AG-1061' then 'AG-117'                 
when anggota_id = 'AG-1062' then 'AG-118'                 
when anggota_id = 'AG-1063' then 'AG-119'                 
when anggota_id = 'AG-1064' then 'AG-120'                 
when anggota_id = 'AG-1065' then 'AG-073'                                 
when anggota_id = 'AG-1067' then 'AG-129'                 
when anggota_id = 'AG-1068' then 'AG-124'                 
when anggota_id = 'AG-1069' then 'AG-130'                 
when anggota_id = 'AG-1070' then 'AG-137'                 
when anggota_id = 'AG-1071' then 'AG-071'                 
when anggota_id = 'AG-1072' then 'AG-148'                 
when anggota_id = 'AG-1073' then 'AG-150'                 
when anggota_id = 'AG-1074' then 'AG-151'                 
when anggota_id = 'AG-1075' then 'AG-152'                 
when anggota_id = 'AG-1076' then 'AG-153'                 
when anggota_id = 'AG-1077' then 'AG-155'                 
when anggota_id = 'AG-1078' then 'AG-156'                 
when anggota_id = 'AG-1079' then 'AG-164'                 
when anggota_id = 'AG-1080' then 'AG-169'                 
when anggota_id = 'AG-1081' then 'AG-152'                 
when anggota_id = 'AG-1082' then 'AG-176'                 
when anggota_id = 'AG-1084' then 'AG-192'                 
when anggota_id = 'AG-1085' then 'AG-194'
when anggota_id = 'AG-1088' then 'AG-199'                 
when anggota_id = 'AG-1089' then 'AG-201'                 
when anggota_id = 'AG-1090' then 'AG-202'                 
when anggota_id = 'AG-1091' then 'AG-215'                 
when anggota_id = 'AG-1092' then 'AG-205'                 
when anggota_id = 'AG-1093' then 'AG-208'                 
when anggota_id = 'AG-1094' then 'AG-211'                 
when anggota_id = 'AG-1095' then 'AG-212'                 
when anggota_id = 'AG-1096' then 'AG-216'                 
when anggota_id = 'AG-1097' then 'AG-217'                 
when anggota_id = 'AG-1098' then 'AG-218'
when anggota_id = 'AG-1100' then 'AG-222'                 
when anggota_id = 'AG-1101' then 'AG-227'                 
when anggota_id = 'AG-1102' then 'AG-229'                 
when anggota_id = 'AG-1103' then 'AG-230'                 
when anggota_id = 'AG-1104' then 'AG-232'                 
when anggota_id = 'AG-1105' then 'AG-235'                 
when anggota_id = 'AG-1106' then 'AG-236'                 
when anggota_id = 'AG-1107' then 'AG-238'                 
when anggota_id = 'AG-1108' then 'AG-239'                 
when anggota_id = 'AG-1109' then 'AG-240'                 
when anggota_id = 'AG-1110' then 'AG-241'                 
when anggota_id = 'AG-1111' then 'AG-244'                 
when anggota_id = 'AG-1112' then 'AG-245'                 
when anggota_id = 'AG-1113' then 'AG-246'                 
when anggota_id = 'AG-1114' then 'AG-247'                 
when anggota_id = 'AG-1115' then 'AG-253'                 
when anggota_id = 'AG-1116' then 'AG-254'                 
when anggota_id = 'AG-1117' then 'AG-255'                 
when anggota_id = 'AG-1118' then 'AG-257'                 
when anggota_id = 'AG-1119' then 'AG-260'                 
when anggota_id = 'AG-1120' then 'AG-263'                 
when anggota_id = 'AG-1121' then 'AG-264'                 
when anggota_id = 'AG-1122' then 'AG-265'                 
when anggota_id = 'AG-1123' then 'AG-271'                 
when anggota_id = 'AG-1124' then 'AG-272'
when anggota_id = 'AG-1126' then 'AG-274'                 
when anggota_id = 'AG-1127' then 'AG-275'                 
when anggota_id = 'AG-1128' then 'AG-276'                 
when anggota_id = 'AG-1129' then 'AG-277'                 
when anggota_id = 'AG-1130' then 'AG-278'                 
when anggota_id = 'AG-1131' then 'AG-280'                 
when anggota_id = 'AG-1132' then 'AG-281'                 
when anggota_id = 'AG-1133' then 'AG-282'                 
when anggota_id = 'AG-1134' then 'AG-283'                 
when anggota_id = 'AG-1135' then 'AG-286'                 
when anggota_id = 'AG-1136' then 'AG-287'
when anggota_id = 'AG-1143' then 'AG-204'                 
when anggota_id = 'AG-1144' then 'AG-231'                 
end 
where anggota_id in (
'AG-1050', 
'AG-1051', 
'AG-1052', 
'AG-1054', 
'AG-1055', 
'AG-1056', 
'AG-1057', 
'AG-1058', 
'AG-1059', 
'AG-1061', 
'AG-1062', 
'AG-1063', 
'AG-1064', 
'AG-1065', 
'AG-1067', 
'AG-1068', 
'AG-1069', 
'AG-1070', 
'AG-1071', 
'AG-1072', 
'AG-1073', 
'AG-1074', 
'AG-1075', 
'AG-1076', 
'AG-1077', 
'AG-1078', 
'AG-1079', 
'AG-1080', 
'AG-1081', 
'AG-1082', 
'AG-1084', 
'AG-1085', 
'AG-1088', 
'AG-1089', 
'AG-1090', 
'AG-1091', 
'AG-1092', 
'AG-1093', 
'AG-1094', 
'AG-1095', 
'AG-1096', 
'AG-1097', 
'AG-1098', 
'AG-1100', 
'AG-1101', 
'AG-1102', 
'AG-1103', 
'AG-1104', 
'AG-1105', 
'AG-1106', 
'AG-1107', 
'AG-1108', 
'AG-1109', 
'AG-1110', 
'AG-1111', 
'AG-1112', 
'AG-1113', 
'AG-1114', 
'AG-1115', 
'AG-1116', 
'AG-1117', 
'AG-1118', 
'AG-1119', 
'AG-1120', 
'AG-1121', 
'AG-1122', 
'AG-1123', 
'AG-1124', 
'AG-1126', 
'AG-1127', 
'AG-1128', 
'AG-1129', 
'AG-1130', 
'AG-1131', 
'AG-1132', 
'AG-1133', 
'AG-1134', 
'AG-1135', 
'AG-1136', 
'AG-1143', 
'AG-1144' 
);

-- update tbl_anggota #anggota_id 
update tbl_anggota 
set anggota_id = case
when anggota_id = 'AG-1050' then 'AG-070'                
when anggota_id = 'AG-1051' then 'AG-075'                
when anggota_id = 'AG-1052' then 'AG-067'                
when anggota_id = 'AG-1054' then 'AG-079'                 
when anggota_id = 'AG-1055' then 'AG-082'                 
when anggota_id = 'AG-1056' then 'AG-083'                 
when anggota_id = 'AG-1057' then 'AG-088'                 
when anggota_id = 'AG-1058' then 'AG-098'                 
when anggota_id = 'AG-1059' then 'AG-106'                 
when anggota_id = 'AG-1061' then 'AG-117'                 
when anggota_id = 'AG-1062' then 'AG-118'                 
when anggota_id = 'AG-1063' then 'AG-119'                 
when anggota_id = 'AG-1064' then 'AG-120'                 
when anggota_id = 'AG-1065' then 'AG-073'                 
-- when anggota_id = 'AG-1066' then 'AG-066'                 
when anggota_id = 'AG-1067' then 'AG-129'                 
when anggota_id = 'AG-1068' then 'AG-124'                 
when anggota_id = 'AG-1069' then 'AG-130'                 
when anggota_id = 'AG-1070' then 'AG-137'                 
when anggota_id = 'AG-1071' then 'AG-071'                 
when anggota_id = 'AG-1072' then 'AG-148'                 
when anggota_id = 'AG-1073' then 'AG-150'                 
when anggota_id = 'AG-1074' then 'AG-151'                 
when anggota_id = 'AG-1075' then 'AG-152'                 
when anggota_id = 'AG-1076' then 'AG-153'                 
when anggota_id = 'AG-1077' then 'AG-155'                 
when anggota_id = 'AG-1078' then 'AG-156'                 
when anggota_id = 'AG-1079' then 'AG-164'                 
when anggota_id = 'AG-1080' then 'AG-169'                 
when anggota_id = 'AG-1081' then 'AG-152'                 
when anggota_id = 'AG-1082' then 'AG-176'
when anggota_id = 'AG-1084' then 'AG-192'                 
when anggota_id = 'AG-1085' then 'AG-194'
when anggota_id = 'AG-1088' then 'AG-199'                 
when anggota_id = 'AG-1089' then 'AG-201'                 
when anggota_id = 'AG-1090' then 'AG-202'                 
when anggota_id = 'AG-1091' then 'AG-215'                 
when anggota_id = 'AG-1092' then 'AG-205'                 
when anggota_id = 'AG-1093' then 'AG-208'                 
when anggota_id = 'AG-1094' then 'AG-211'                 
when anggota_id = 'AG-1095' then 'AG-212'                 
when anggota_id = 'AG-1096' then 'AG-216'                 
when anggota_id = 'AG-1097' then 'AG-217'                 
when anggota_id = 'AG-1098' then 'AG-218'
when anggota_id = 'AG-1100' then 'AG-222'                 
when anggota_id = 'AG-1101' then 'AG-227'                 
when anggota_id = 'AG-1102' then 'AG-229'                 
when anggota_id = 'AG-1103' then 'AG-230'                 
when anggota_id = 'AG-1104' then 'AG-232'                 
when anggota_id = 'AG-1105' then 'AG-235'                 
when anggota_id = 'AG-1106' then 'AG-236'                 
when anggota_id = 'AG-1107' then 'AG-238'                 
when anggota_id = 'AG-1108' then 'AG-239'                 
when anggota_id = 'AG-1109' then 'AG-240'                 
when anggota_id = 'AG-1110' then 'AG-241'                 
when anggota_id = 'AG-1111' then 'AG-244'                 
when anggota_id = 'AG-1112' then 'AG-245'                 
when anggota_id = 'AG-1113' then 'AG-246'                 
when anggota_id = 'AG-1114' then 'AG-247'                 
when anggota_id = 'AG-1115' then 'AG-253'                 
when anggota_id = 'AG-1116' then 'AG-254'                 
when anggota_id = 'AG-1117' then 'AG-255'                 
when anggota_id = 'AG-1118' then 'AG-257'                 
when anggota_id = 'AG-1119' then 'AG-260'                 
when anggota_id = 'AG-1120' then 'AG-263'                 
when anggota_id = 'AG-1121' then 'AG-264'                 
when anggota_id = 'AG-1122' then 'AG-265'                 
when anggota_id = 'AG-1123' then 'AG-271'                 
when anggota_id = 'AG-1124' then 'AG-272'                             
when anggota_id = 'AG-1126' then 'AG-274'                 
when anggota_id = 'AG-1127' then 'AG-275'                 
when anggota_id = 'AG-1128' then 'AG-276'                 
when anggota_id = 'AG-1129' then 'AG-277'                 
when anggota_id = 'AG-1130' then 'AG-278'                 
when anggota_id = 'AG-1131' then 'AG-280'                 
when anggota_id = 'AG-1132' then 'AG-281'                 
when anggota_id = 'AG-1133' then 'AG-282'                 
when anggota_id = 'AG-1134' then 'AG-283'                 
when anggota_id = 'AG-1135' then 'AG-286'                 
when anggota_id = 'AG-1136' then 'AG-287'                               
when anggota_id = 'AG-1143' then 'AG-204'                 
when anggota_id = 'AG-1144' then 'AG-231'                 
end 
where anggota_id in (
'AG-1050', 
'AG-1051', 
'AG-1052', 
'AG-1054', 
'AG-1055', 
'AG-1056', 
'AG-1057', 
'AG-1058', 
'AG-1059', 
'AG-1061', 
'AG-1062', 
'AG-1063', 
'AG-1064', 
'AG-1065', 
-- 'AG-1066', 
'AG-1067', 
'AG-1068', 
'AG-1069', 
'AG-1070', 
'AG-1071', 
'AG-1072', 
'AG-1073', 
'AG-1074', 
'AG-1075', 
'AG-1076', 
'AG-1077', 
'AG-1078', 
'AG-1079', 
'AG-1080', 
'AG-1081', 
'AG-1082', 
'AG-1084', 
'AG-1085',
'AG-1088', 
'AG-1089', 
'AG-1090', 
'AG-1091', 
'AG-1092', 
'AG-1093', 
'AG-1094', 
'AG-1095', 
'AG-1096', 
'AG-1097', 
'AG-1098',  
'AG-1100', 
'AG-1101', 
'AG-1102', 
'AG-1103', 
'AG-1104', 
'AG-1105', 
'AG-1106', 
'AG-1107', 
'AG-1108', 
'AG-1109', 
'AG-1110', 
'AG-1111', 
'AG-1112', 
'AG-1113', 
'AG-1114', 
'AG-1115', 
'AG-1116', 
'AG-1117', 
'AG-1118', 
'AG-1119', 
'AG-1120', 
'AG-1121', 
'AG-1122', 
'AG-1123', 
'AG-1124', 
'AG-1126', 
'AG-1127', 
'AG-1128', 
'AG-1129', 
'AG-1130', 
'AG-1131', 
'AG-1132', 
'AG-1133', 
'AG-1134', 
'AG-1135', 
'AG-1136', 
'AG-1143', 
'AG-1144' 
);

=================================================================================

-- update tbl_simpanan_detil #simpanan_id	
#UPDATE TABLE tbl_simpanan_detil

update tbl_simpanan_detil
set simpanan_id = case 
when simpanan_id = 'SP-1139' then 'SP-139' 
when simpanan_id = 'SP-1069' then 'SP-071'
when simpanan_id = 'SP-1125' then 'SP-125'
end 
where simpanan_id in (
'SP-1139', 
'SP-1069', 
'SP-1125'
);

-- update tbl_simpanan #simpanan_id
update tbl_simpanan 
set simpanan_id = case
when simpanan_id = 'SP-1086' then 'SP-086'
when simpanan_id = 'SP-1087' then 'SP-087'
when simpanan_id = 'SP-1099' then 'SP-099'
when simpanan_id = 'SP-1125' then 'SP-125'
when simpanan_id = 'SP-1138' then 'SP-138'
when simpanan_id = 'SP-1139' then 'SP-139'
when simpanan_id = 'SP-1140' then 'SP-140'
when simpanan_id = 'SP-1141' then 'SP-141'
when simpanan_id = 'SP-1142' then 'SP-142'
end 
where simpanan_id in (
'SP-1086',
'SP-1087',
'SP-1099',
'SP-1125', 
'SP-1138',
'SP-1139', 
'SP-1140', 
'SP-1141', 
'SP-1142'
);

-- update tbl_simpanan #anggota_id 
update tbl_simpanan 
set anggota_id = case
when anggota_id = 'AG-1086' then 'AG-086'              
when anggota_id = 'AG-1087' then 'AG-087'  
when anggota_id = 'AG-1099' then 'AG-099'   
when anggota_id = 'AG-1125' then 'AG-125'  
when anggota_id = 'AG-1138' then 'AG-138'              
when anggota_id = 'AG-1139' then 'AG-139'              
when anggota_id = 'AG-1140' then 'AG-140'              
when anggota_id = 'AG-1141' then 'AG-141'              
when anggota_id = 'AG-1142' then 'AG-142'
end 
where anggota_id in (
'AG-1086', 
'AG-1087', 
'AG-1099',
'AG-1125', 
'AG-1138', 
'AG-1139', 
'AG-1140', 
'AG-1141', 
'AG-1142'
);

-- update tbl_anggota #anggota_id 
update tbl_anggota 
set anggota_id = case
when anggota_id = 'AG-1086' then 'AG-086'              
when anggota_id = 'AG-1087' then 'AG-087'  
when anggota_id = 'AG-1099' then 'AG-099' 
when anggota_id = 'AG-1125' then 'AG-125'  
when anggota_id = 'AG-1138' then 'AG-138'              
when anggota_id = 'AG-1139' then 'AG-139'              
when anggota_id = 'AG-1140' then 'AG-140'              
when anggota_id = 'AG-1141' then 'AG-141'              
when anggota_id = 'AG-1142' then 'AG-142'
end 
where anggota_id in (
'AG-1086', 
'AG-1087', 
'AG-1099',
'AG-1125', 
'AG-1138', 
'AG-1139', 
'AG-1140', 
'AG-1141', 
'AG-1142'
);

=========================================
-- update tbl_simpanan_detil #simpanan_id	
#UPDATE TABLE tbl_simpanan_detil

update tbl_simpanan_detil
set simpanan_id = case 
-- when simpanan_id = 'SP-1137' then #Diisi oleh Ibu Diyah Junaedi
end 
where simpanan_id in (
'SP-1137'
);


-- update tbl_simpanan #simpanan_id
update tbl_simpanan 
set simpanan_id = case
-- when simpanan_id = 'SP-1060' then #Diisi oleh Wawan Suryana
-- when simpanan_id = 'SP-1053' then -- Kindi / Kakang Bahrudin
-- when simpanan_id = 'SP-1083' then #Diisi oleh bu Emeh
-- when simpanan_id = 'SP-1137' then #Diisi oleh Ibu Diyah Junaedi
-- when simpanan_id = 'SP-1066' then #Diisi Oleh Supardi
end 
where simpanan_id in (
-- 'SP-1060', 
-- 'SP-1053', 
-- 'SP-1083',
-- 'SP-1137', 
'SP-1066'
);



-- update tbl_simpanan #anggota_id 
update tbl_simpanan 
set anggota_id = case
-- when simpanan_id = 'AG-1060' then #Diisi oleh Wawan Suryana
-- when simpanan_id = 'AG-1053' then -- Kindi / Kakang Bahrudin
-- when simpanan_id = 'AG-1083' then #Diisi oleh bu Emeh
-- when simpanan_id = 'AG-1137' then #Diisi oleh Ibu Diyah Junaedi
-- when anggota_id = 'AG-1066' then #Diisi oleh Supriyadi
end 
where anggota_id in (
-- 'AG-1060', 
-- 'AG-1053',
-- 'AG-1083', 
-- 'AG-1137',
'AG-1066'
);



-- update tbl_anggota #anggota_id 
update tbl_anggota 
set anggota_id = case
-- when simpanan_id = 'AG-1060' then #Diisi oleh Wawan Suryana
-- when simpanan_id = 'AG-1053' then -- Kindi / Kakang Bahrudin
-- when simpanan_id = 'AG-1083' then #Diisi oleh bu Emeh
-- when simpanan_id = 'AG-1137' then #Diisi oleh Ibu Diyah Junaedi
end 
where anggota_id in (
-- 'AG-1060', 
-- 'AG-1053', 
-- 'AG-1083', 
-- 'AG-1137', 
);



------------------------
UPDATE DATA AG-1081 -  Ibu Siti Rogayah.R

UPDATE tbl_simpanan 
set simpanan_id = case
when simpanan_id = 'SP-1081' then 'SP-171'
end
where simpanan_id IN (
'SP-1081'
)

UPDATE tbl_simpanan 
set anggota_id = case
when anggota_id = 'AG-1081' then 'AG-171'
end
where simpanan_id IN (
'AG-1081'
)

UPDATE tbl_anggota
set anggota_id = case
when anggota_id = 'AG-1081' then 'AG-171'
end
where simpanan_id IN (
'AG-1081'
)
