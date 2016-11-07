
-- update tbl_simpanan #simpanan_id
update tbl_simpanan 
set simpanan_id = case
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

-- update tbl_anggota #anggota_id 
update tbl_anggota 
set anggota_id = case
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