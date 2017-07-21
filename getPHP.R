setwd('/Users/pdaus/Documents/Seetru/R/phpR/')
library(jsonlite)
args <- commandArgs(TRUE)

satu <- args[1]
dua <- args[2]
tiga <- args[3]
empat <- args[4]

list <- vector(mode="list")
list[[1]] <- satu:dua
list[[2]] <- tiga:empat

exportJson <- toJSON(list)
write(exportJson, "printJsonFromPHP.json")