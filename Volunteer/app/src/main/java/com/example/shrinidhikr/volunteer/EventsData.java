package com.example.shrinidhikr.volunteer;

public class EventsData {
    private String id;
    private String name;
    private String des,dfrom,dto,tfrom,tto,climit,locaddr,city,state,status,coname,copho;

    public EventsData() {
    }

    public EventsData(String id, String name,String des,String dfrom,String dto,String tfrom,String tto,String climit,String locaddr,String city,String state,String status,String coname,String copho) {
        this.id = id;
        this.name = name;this.des = des;this.dfrom = dfrom;this.dto = dto;this.tfrom = tfrom;
        this.tto = tto;this.climit = climit;this.locaddr = locaddr;this.city = city;
        this.state = state;this.status = status;this.coname = coname;this.copho = copho;
    }

    public String getId() {
        return id;
    }

    public String getName() {
        return name;
    }

    public String getDes() {
        return des;
    }

    public String getDfrom() {
        return dfrom;
    }

    public String getDto() {
        return dto;
    }

    public String getTfrom() {
        return tfrom;
    }

    public String getTto() {
        return tto;
    }

    public String getClimit() {
        return climit;
    }

    public String getLocaddr() {
        return locaddr;
    }

    public String getCity() {
        return city;
    }

    public String getState() {
        return state;
    }

    public String getStatus() {
        return status;
    }

    public String getConame() {
        return coname;
    }

    public String getCopho() {
        return copho;
    }
}
